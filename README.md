# symfony_learn_jobeet

symfony3.3学习jobeet项目

####  symfony 安装

```
composer create-project symfony/framework-standard-edition my_project_name "3.3.*"
```

   ##### 创建一个bundle

```
php bin/console generate:bundle --namespace=Ibw/JobeetBundle --format=yml
```

##### 创建数据库 (根据配置文件生成)

```
php bin/console doctrine:database:create
```

##### 模式

​		为了让*Doctrine*能够“了解“我们的对象，我们需要创建“元数据”文件来描述对象在数据库中存放时对应的字段域。我们先在*src/Ibw/JobeetBundle/Resources/config*目录下创建一个*doctrine*目录。*doctrine/*目录下会包含三个文件：*Category.orm.yml*，*Job.orm.yml*和*Affiliate.orm.yml*

​	**targetEntity**代表目标表

​	**inversedBy**或者**mappedBy**则代表那个表中entity所定义的字段。

​	**JoinColumn**中那么表示本表的字段

​	**referencedColumnName**表示外键对应的另一个表的字段

​	简单说外键**JoinColumn**所定义的地方是**inversedBy**而另一边就是**mappedBy**

​	**oneToMany 一对多的关系、manyToMany 多对多、manyToOne 多对一**

```
# src/Ibw/JobeetBundle/Resources/config/doctrine/Category.orm.yml
Ibw\JobeetBundle\Entity\Category:
    type: entity
    table: category
    id:
        id:
            type: integer
            generator: { strategy: AUTO }
    fields:
        name:
            type: string
            length: 255
            unique: true
    oneToMany:
        jobs:
            targetEntity: Job
            mappedBy: category
    manyToMany:
        affiliates:
            targetEntity: Affiliate
            mappedBy: categories
```

```
# src/Ibw/JobeetBundle/Resources/config/doctrine/Job.orm.yml
Ibw\JobeetBundle\Entity\Job:
    type: entity
    table: job
    id:
        id:
            type: integer
            generator: { strategy: AUTO }
    fields:
        type:
            type: string
            length: 255
            nullable: true
        company:
            type: string
            length: 255
        logo:
            type: string
            length: 255
            nullable: true
        url:
            type: string
            length: 255
            nullable: true
        position:
            type: string
            length: 255
        location:
            type: string
            length: 255
        description:
            type: text
        how_to_apply:
            type: text
        token:
            type: string
            length: 255
            unique: true
        is_public:
            type: boolean
            nullable: true
        is_activated:
            type: boolean
            nullable: true
        email:
            type: string
            length: 255
        expires_at:
            type: datetime
        created_at:
            type: datetime
        updated_at:
            type: datetime
            nullable: true
    manyToOne:
        category:
            targetEntity: Category
            inversedBy: jobs
            joinColumn:
                name: category_id
                referencedColumnName: id
    lifecycleCallbacks:
        prePersist: [ setCreatedAtValue ]
        preUpdate: [ setUpdatedAtValue ]
```

```
# src/Ibw/JobeetBundle/Resources/config/doctrine/Affiliate.orm.yml
Ibw\JobeetBundle\Entity\Affiliate:
    type: entity
    table: affiliate
    id:
        id:
            type: integer
            generator: { strategy: AUTO }
    fields:
        url:
            type: string
            length: 255
        email:
            type: string
            length: 255
            unique: true
        token:
            type: string
            length: 255
        is_active:
            type: boolean
            nullable: true
        created_at:
            type: datetime
    manyToMany:
        categories:
            targetEntity: Category
            inversedBy: affiliates
            joinTable:
                name: category_affiliate
                joinColumns:
                    affiliate_id:
                        referencedColumnName: id
                inverseJoinColumns:
                    category_id:
                        referencedColumnName: id
    lifecycleCallbacks:
        prePersist: [ setCreatedAtValue ]
```

## ORM

现在我们在终端输入下面的命令，*Doctrine*能够按照我们的定义来生成对应的类了：

使用之前清理一下缓存

```
php bin/console cache:clear
php bin/console doctrine:generate:entities IbwJobeetBundle
```



现在我们可以在*src/Ibw/JobeetBundle*目录下看到一个*Entity*目录，在*Entity*目录中我们可以看到新生成的文件：*Category.php*，*Job.php*和*Affiliate.php*。打开*Job.php*文件，把*created_at*和*updated_at*的值设置如下：

```
// src/Ibw/JobeetBundle/Entity/Job.php
// ...
 
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt()) {
            $this->created_at = new \DateTime();
        }
    }
 
    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }
```

对*Affiliate*类中的*created_at*进行同样的修改：

```
// src/Ibw/JobeetBundle/Entity/Affiliate.php
// ...
 
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->created_at = new \DateTime();
    }
 
// ...
```

上面做的修改会让*Doctrine*在保存对象或者更新对象的时候更新*created_at*和*updated_at*的值。这些*Doctrine*行为被定义在*Affiliate.orm.yml*和*Job.orm.yml*文件的下面。接下来我们让*Doctrine*来帮助我们生成数据表，输入下面的命令：

```
php bin/console doctrine:schema:update --force
```

 这个任务（task）只能在开发环境（development）中使用。如果需要在生产环境（production）中更新你的数据库的话，你可以查看[Doctrine migrations](http://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html)。

现在数据表已经创建好了，但数据表中还没有任何的数据。对于一个Web应用来说，它们往往具有三类数据：初始数据（应用开始运行时所需要的数据，在Jobeet中我们需要初始化用的分类（categories）数据和管理员（admin）数据），测试数据（测试应用程序时需要用到的数据）和用户数据（用户在使用应用过程中创建的数据）

为了让我们的数据库中能有些初始数据，我们使用DoctrineFixturesBundle来帮我们生成数据。我们来按照下面的步骤来安装DoctrineFixturesBundle：

```
composer require doctrine/doctrine-fixtures-bundle
composer require doctrine/data-fixtures
```

### 在*app/AppKernel.php*中注册*DoctrineFixturesBundle*

```
// app/AppKernel.php
// ...
 
public function registerBundles()
{
    $bundles = array(
        // ...
        new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle()
    );
 
    // ...
```

现在我们已经准备好*DoctrineFixturesBundle*了，我们在*src/Ibw/JobeetBundle/DataFixtures/ORM/*目录下创建一些新类来加载数据：

```
// src/Ibw/JobeetBundle/DataFixtures/ORM/LoadCategoryData.php
namespace Ibw\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ibw\JobeetBundle\Entity\Category;
 
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $design = new Category();
        $design->setName('Design');
 
        $programming = new Category();
        $programming->setName('Programming');
 
        $manager = new Category();
        $manager->setName('Manager');
 
        $administrator = new Category();
        $administrator->setName('Administrator');
 
        $em->persist($design);
        $em->persist($programming);
        $em->persist($manager);
        $em->persist($administrator);
        $em->flush();
 
        $this->addReference('category-design', $design);
        $this->addReference('category-programming', $programming);
        $this->addReference('category-manager', $manager);
        $this->addReference('category-administrator', $administrator);
    }
 
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
```

```
// src/Ibw/JobeetBundle/DataFixtures/ORM/LoadJobData.php
namespace Ibw\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ibw\JobeetBundle\Entity\Job;
 
class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
         $job_sensio_labs = new Job();
         $job_sensio_labs->setCategory($em->merge($this->getReference('category-programming')));
         $job_sensio_labs->setType('full-time');
         $job_sensio_labs->setCompany('Sensio Labs');
         $job_sensio_labs->setLogo('sensio-labs.gif');
         $job_sensio_labs->setUrl('http://www.sensiolabs.com/');
         $job_sensio_labs->setPosition('Web Developer');
         $job_sensio_labs->setLocation('Paris, France');
         $job_sensio_labs->setDescription('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
         $job_sensio_labs->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
         $job_sensio_labs->setIsPublic(true);
         $job_sensio_labs->setIsActivated(true);
         $job_sensio_labs->setToken('job_sensio_labs');
         $job_sensio_labs->setEmail('job@example.com');
         $job_sensio_labs->setExpiresAt(new \DateTime('+30 days'));
         $job_extreme_sensio = new Job();
         $job_extreme_sensio->setCategory($em->merge($this->getReference('category-design')));
         $job_extreme_sensio->setType('part-time');
         $job_extreme_sensio->setCompany('Extreme Sensio');
         $job_extreme_sensio->setLogo('extreme-sensio.gif');
         $job_extreme_sensio->setUrl('http://www.extreme-sensio.com/');
         $job_extreme_sensio->setPosition('Web Designer');
         $job_extreme_sensio->setLocation('Paris, France');
         $job_extreme_sensio->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
         $job_extreme_sensio->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
         $job_extreme_sensio->setIsPublic(true);
         $job_extreme_sensio->setIsActivated(true);
         $job_extreme_sensio->setToken('job_extreme_sensio');
         $job_extreme_sensio->setEmail('job@example.com');
         $job_extreme_sensio->setExpiresAt(new \DateTime('+30 days'));
 
         $em->persist($job_sensio_labs);
         $em->persist($job_extreme_sensio);
         $em->flush();
    }
 
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
```

现在我们已经把*Fixtures*写好了，我们可以使用下面的命令来加载这些数据：

在symfony3.3中使用**doctrine:fixtures:load** 需要在services 注册

```
//app/config/services.yml
  Ibw\JobeetBundle\DataFixtures\:
     resource: '../../src/Ibw/JobeetBundle/DataFixtures'
     tags: ['doctrine.fixture.orm']
```

现在可以使用下面的命令来加载这些数据

```
php bin/console doctrine:fixtures:load
```

现在我们可以去数据库看看，我们将会看到数据表中已经有数据了。

运行下面的命令，它将会创建一个新的控制器（controller）*src/Ibw/JobeetBundle/Controllers/JobController.php*，这个控制器还带有*CURD*动作（Action）。

```
php bin/console doctrine:generate:crud --entity=IbwJobeetBundle:Job --route-prefix=ibw_job --with-write --format=yml
```

路由文件便于访问修改问job

```
# src/Ibw/JobeetBundle/Resources/config/routing.yml
IbwJobeetBundle_job:
        resource: "@IbwJobeetBundle/Resources/config/routing/job.yml"
        prefix:   /job
# ...
```

同时我们需要在*Category*类中添加*__toString()*方法，这样做是为了让*Job*表单能够下拉选择类别（category）：

```
// src/Ibw/JobeetBundle/Entity/Category.php
// ...
public function __toString()
{
    return $this->getName() ? $this->getName() : "";
}
// ...
```

清除缓存

```
php bin/console cache:clear
```

现在我们可以在浏览器中测试一下了：*自己配置的域名/job/*，或者在开发环境中的*自己配置的域名/app_dev.php/job/*。

![](http://www.newlifeclan.com/symfony/wp-content/uploads/sites/2/2015/03/03-02-1024x556.png)

#### [jobeet第四天:控制器和视图](http://www.newlifeclan.com/symfony/archives/332)

​	布局

如果你有仔细观察[Jobeet的模型](http://symfony.com/legacy/doc/jobeet/1_4/en/02?orm=Doctrine#chapter_02_the_project_user_stories)，你可能会注意到它们的每个页面看起来都很相似。我们都知道，不管是*PHP*代码还是*HTML*代码，重复的代码给人的感觉就是很差，因此我们需要找到一个方法来提取重复的代码，这样做我们的程序才会更加简洁和容易维护。

我们有一种解决方法是，我们可以先定义出页面的*header*和*footer*，然后把它们包含在每个页面中。另一种更好的办法则是使用一种设计模式来解决问题：[装饰者模式](http://en.wikipedia.org/wiki/Decorator_pattern)。**装饰者模式**解决问题的方式是：即先把一个子模板渲染完成后再把它放到一个全局的模板中去，而那个全局的模板叫做**布局（layout）**。

*Symfony*中并没有提供默认的布局，所以我们需要来创建一个布局来装饰其它的子页面模板。

我们在*src/Ibw/JobeetBundle/Resources/views/*目录下创建一个新文件*layout.html.twig*，它的代码如下

```
<!DOCTYPE html>
<html>
    <head>
        <title>
            {% block title %}
                Jobeet - Your best job board
            {% endblock %}
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        {% block stylesheets %}
            <link rel="stylesheet" href="{{ asset('bundles/ibwjobeet/css/main.css') }}" type="text/css" media="all" />
        {% endblock %}
        {% block javascripts %}
        {% endblock %}
        <link rel="shortcut icon" href="{{ asset('bundles/ibwjobeet/images/favicon.ico') }}" />
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div class="content">
                    <h1><a href="{{ path('ibw_job') }}">
                        <img src="{{ asset('bundles/ibwjobeet/images/logo.jpg') }}" alt="Jobeet Job Board" />
                    </a></h1>

                    <div id="sub_header">
                        <div class="post">
                            <h2>Ask for people</h2>
                            <div>
                                <a href="{{ path('ibw_job_new') }}">Post a Job</a>
                            </div>
                        </div>

                        <div class="search">
                            <h2>Ask for a job</h2>
                            <form action="" method="get">
                                <input type="text" name="keywords" id="search_keywords" />
                                <input type="submit" value="search" />
                                <div class="help">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

           <div id="content">
               {% for flashMessage in app.session.flashbag.get('notice') %}
                   <div class="flash_notice">
                       {{ flashMessage }}
                   </div>
               {% endfor %}

               {% for flashMessage in app.session.flashbag.get('error') %}
                   <div class="flash_error">
                       {{ flashMessage }}
                   </div>
               {% endfor %}

               <div class="content">
                   {% block content %}
                   {% endblock %}
               </div>
           </div>

           <div id="footer">
               <div class="content">
                   <span class="symfony">
                       <img src="{{ asset('bundles/ibwjobeet/images/jobeet-mini.png') }}" />
                           powered by <a href="http://www.symfony.com/">
                           <img src="{{ asset('bundles/ibwjobeet/images/symfony.gif') }}" alt="symfony framework" />
                       </a>
                   </span>
                   <ul>
                       <li><a href="">About Jobeet</a></li>
                       <li class="feed"><a href="">Full feed</a></li>
                       <li><a href="">Jobeet API</a></li>
                       <li class="last"><a href="">Affiliates</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </body>
</html>
```

## *Twig*区块（*Blocks*）

*twig*是*Symfony*默认的模板引擎，你可以像我们在上面的代码中一样定义区块（blocks）。在*Twig*的*block*中，我们可以给它们定义默认的内容（比如上面的*title block*）。待会我们将会看到如何在子模板中替换*block*中默认的内容或者是继承*block*中的内容。

现在我们想要使用*layout*的话，我们还需要去编辑子模板（*src/Ibw/JobeetBundle/Resources/views/Job/*目录下的*index*，*edit*、*new*和*show*）去继承*layout*并重写（overwrite）*layout*中的*block content*。子模板的结构就像下面那样：

```
{% extends 'IbwJobeetBundle::layout.html.twig' %} 
{% block content %}
    <!-- original body block code goes here -->
{% endblock %}
```

## *Stylesheets*，*Javascripts*和图片

我们的教程不是讲授怎样进行*Web*设计，所以这里已经准备好了所有需要使用到的资源。图片已经放到src/Ibw/JobeetBundle/Resources/public/images/*目录下，*css*文件已经放在*src/Ibw/JobeetBundle/Resources/public/css/*目录下。

现在运行下面的命令生成软连接：

```
php bin/console assets:install web --symlink
```

上面的命令为了是告诉*Symfony*把*css*和*图片*资源作为公用（外部可以访问到）的。

在*css*文件夹中，我们可以看到有四个文件：*admin.css*，*job.css*，*jobs.css*和*main.css*。*main.css*需要被所有的*Jobeet*页面使用，所以我们把它放在*layout*中的*stylesheet twig block*里。剩下的其它三个*css*文件我们在需要用到它们的时侯才把它们加入到页面中。

为了能够在模板中加入新的*css*文件，我们需要重写*stylesheet block*中的内容，但需要先调用父*block*，这样才不会把*main.css*给覆盖掉（看代码就明白了）。

```
<!-- src/Ibw/JobeetBundle/Resources/views/Job/index.html.twig -->
{% extends 'IbwJobeetBundle::layout.html.twig' %}
 
{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" href="{{ asset('bundles/ibwjobeet/css/jobs.css') }}" type="text/css" media="all" />
{% endblock %}
 
<!-- rest of the code -->
```

```
<!-- src/Ibw/JobeetBundle/Resources/views/Job/show.html.twig -->
{% extends 'IbwJobeetBundle::layout.html.twig' %}
 
{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" href="{{ asset('bundles/ibwjobeet/css/job.css') }}" type="text/css" media="all" />
{% endblock %}
 
<!-- rest of the code -->
```

## *Job*首页*Action*



一个*action*就对应着一个控制器中的一个操作。简而言之，*action*就是一个方法。对于访问*Job*（职位）首页来说，此时的控制器是*JobController*，而对应的*action*是*indexAction()*。*indexAction()*会取出数据库中所有的*Job*数据。

```
// src/Ibw/JobeetBundle/Controller/JobController.php
// ...
 
public function indexAction()
{
    $em = $this->getDoctrine()->getManager();
 
    $entities = $em->getRepository('IbwJobeetBundle:Job')->findAll();
 
    return $this->render('IbwJobeetBundle:Job:index.html.twig', array(
        'entities' => $entities
    ));
}
 
```

我们来仔细看看上面的代码：在*indexAction()*方法中得到了一个*Doctrine*实体管理对象（entity manager object），这个对象会负责把数据持久化到数据库或者把数据从数据库中取出。*Repository*则生成一个查询去检索数据库中的*Job*数据，它会返回一个*Job*类型的*Doctrine ArrayColletion*对象，然后把这个对象传递给模板（视图）。

## *Job*首页模板

*index.html.twig*模板有一个显示所有*Job*数据的*HTML*表格。下面是它的代码：

```
<!-- src/Ibw/JobeetBundle/Resources/views/Job/index.html.twig -->
{% extends 'IbwJobeetBundle::layout.html.twig' %}
 
{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" href="{{ asset('bundles/ibwjobeet/css/jobs.css') }}" type="text/css" media="all" />
{% endblock %}
 
{% block content %}
    <h1>Job list</h1>
 
    <table class="records_list">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Company</th>
                <th>Logo</th>
                <th>Url</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>How_to_apply</th>
                <th>Token</th>
                <th>Is_public</th>
                <th>Is_activated</th>
                <th>Email</th>
                <th>Expires_at</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href="{{ path('ibw_job_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>
                <td>{{ entity.type }}</td>
                <td>{{ entity.company }}</td>
                <td>{{ entity.logo }}</td>
                <td>{{ entity.url }}</td>
                <td>{{ entity.position }}</td>
                <td>{{ entity.location }}</td>
                <td>{{ entity.description }}</td>
                <td>{{ entity.howtoapply }}</td>
                <td>{{ entity.token }}</td>
                <td>{{ entity.ispublic }}</td>
                <td>{{ entity.isactivated }}</td>
                <td>{{ entity.email }}</td>
                <td>{% if entity.expiresat %}{{ entity.expiresat|date('Y-m-d H:i:s') }}{% endif%}</td>
                <td>{% if entity.createdat %}{{ entity.createdat|date('Y-m-d H:i:s') }}{% endif%}</td>
                <td>{% if entity.updatedat %}{{ entity.updatedat|date('Y-m-d H:i:s') }}{% endif%}</td>
                <td>
                    <ul>
                        <li>
                            <a href="{{ path('ibw_job_show', { 'id': entity.id }) }}">show</a>
                        </li>
                        <li>
                            <a href="{{ path('ibw_job_edit', { 'id': entity.id }) }}">edit </a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
 
    <ul>
        <li>
            <a href="{{ path('ibw_job_new') }}">
                Create a new entry
            </a>
        </li>
    </ul>
{% endblock %}
```

我们来清除一些不需要显示出来的列（columns）。用下面的代码替换掉*twig block content*：

```
<!-- src/Ibw/JobeetBundle/Resources/views/Job/index.html.twig -->
{% block content %}
    <div id="jobs">
        <table class="jobs">
            {% for entity in entities %}
                <tr class="{{ cycle(['even', 'odd'], loop.index) }}">
                    <td class="location">{{ entity.location }}</td>
                    <td class="position">
                        <a href="{{ path('ibw_job_show', { 'id': entity.id }) }}">
                            {{ entity.position }}
                        </a>
                    </td>
                    <td class="company">{{ entity.company }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}
```

![](http://www.newlifeclan.com/symfony/wp-content/uploads/sites/2/2015/03/04-01-1024x671.png)

## *Job*页面模板

现在我们来自定义*Job*页面的模板。打开*show.html.twig*，用下面的代码替换它：

```
<!-- src/Ibw/JobeetBundle/Resources/views/Job/show.html.twig -->
{% extends 'IbwJobeetBundle::layout.html.twig' %}
 
{% block title %}
    {{ job.company }} is looking for a {{ job.position }}
{% endblock %}
 
{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" href="{{ asset('bundles/ibwjobeet/css/job.css') }}" type="text/css" media="all" />
{% endblock %}
 
{% block content %}
    <div id="job">
        <h1>{{ job.company }}</h1>
        <h2>{{ job.location }}</h2>
        <h3>
            {{ job.position }}
            <small> - {{ job.type }}</small>
        </h3>
 
        {% if job.logo %}
            <div class="logo">
                <a href="{{ job.url }}">
                    <img src="/uploads/jobs/{{ job.logo }}"
                        alt="{{ job.company }} logo" />
                </a>
            </div>
        {% endif %}
 
        <div class="description">
            {{ job.description|nl2br }}
        </div>
 
        <h4>How to apply?</h4>
 
        <p class="how_to_apply">{{ job.howtoapply }}</p>
 
        <div class="meta">
            <small>posted on {{ job.createdat|date('m/d/Y') }}</small>
        </div>
 
        <div style="padding: 20px 0">
            <a href="{{ path('ibw_job_edit', { 'id': job.id }) }}">
                Edit
            </a>
        </div>
    </div>
{% endblock %}
```

![](http://www.newlifeclan.com/symfony/wp-content/uploads/sites/2/2015/03/Day-4-individual-job-1024x671.png)

## *Job*页面的*Action*

*Job*页面是通过*show*这个动作生成的，*showAction()*被定义在*JobController*： 

```
// src/Ibw/JobeetBundle/Controller/JobController.php
public function showAction($id)
{
    $em = $this->getDoctrine()->getManager(); 
    $job = $em->getRepository('IbwJobeetBundle:Job')->find($id); 
    if (!$job) {
        throw $this->createNotFoundException('Unable to find Job entity.');
    } 
    $deleteForm = $this->createDeleteForm($id); 
    return $this->render('IbwJobeetBundle:Job:show.html.twig', array(
        'job' => $job,
        'delete_form' => $deleteForm->createView(),
    ));
}
```

