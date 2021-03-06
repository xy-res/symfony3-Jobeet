# symfony3-Jobeet
symfony3 tutorial 

原文地址: [https://medium.com/@dragosholban/symfony-2-8-jobeet-tutorial-3a72f67cdbd8](https://medium.com/@dragosholban/symfony-2-8-jobeet-tutorial-3a72f67cdbd8)

## 安装

composer 安装

```
composer create-project symfony/framework-standard-edition 项目名称  "3.3.*"
```

### 生成数据库命令



根据parameters 配置文件生成数据库

```
php bin/console doctrine:database:create 
```

### 创建实体类和映射

**targetEntity**代表目标表

**inversedBy**或者**mappedBy**则代表那个表中entity所定义的字段。

**JoinColumn**中那么表示本表的字段

**referencedColumnName**表示外键对应的另一个表的字段

简单说外键**JoinColumn**所定义的地方是**inversedBy**而另一边就是**mappedBy**

**oneToMany **一对多的关系

**manyToMany **多对多

**manyToOne** 多对一

```php
//src/AppBundle/Entity/Category.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
*	@ORM\Entity()
*	@ORM\Table(name="category")
*/
class Category
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=100)
     */
    private $name;
    /**
     * @ORM\OneToMany(targetEntity="Job",mappedBy="category")
     */
    private $jobs;
    /**
     * @ORM\ManyToMany(targetEntity="Affiliate",mappedBy="categories")
     */
    private $affiliates;
}
```

```php
//src/AppBundle/Entity/Job.php
namespace AppBundle\Entity;
/**
 * @ORM\Entity()
 * @ORM\Table(name="job")
 */
class Job
{
  	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Category",inverseBy="jobs")
     * @ORM\JoinColumn(name="category_id",referencedColumnName="id")
     */
    private	$category;
    /**
     * @ORM\Column(type="string",length=""255)
     */
    private $type;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private	$company;
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private	$logo;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private	$url;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $position;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private	$location;
    /**
     * @ORM\Column(type="text")
     */
    private	$description;
    /**
     * @ORM\Column(type="text")
     */
    private	$howToApply;
    /**
     * @ORM\Column(type="string", length=255,unique=true)
     */
    private	$token;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private	$isPublic;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private	$isActivated;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private	$email;
    /**
     * @ORM\Column(type="datetime")
     */
    private	$expiresAt;
    /**
     * @ORM\Column(type="datetime")
     */
    private	$createdAt;
    /**
     * @ORM\Column(type="datetime")
     */
    private	$updateAt;
}
```

```php
//src/AppBundle/Entity/Affiliate.php
namespace AppBundle\Entity;
/**
 * @ORM\Entity()
 * @ORM\Table(name="affiliate")
 * @ORM\HasLifecycleCallbacks()
 */
class Affiliate
{
  	 /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private	$id;
    /**
     * @ORM\ManyToMany(targetEntity="Category",inverseBy="affiliates")
     * @ORM\JoinTable(name="affiliates_categories")
     */
    private	$categories;
    /**
     * @ORM\Column(type="string",length=""255)
     */
    private	$url;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=255,unique=true)
     */
    private $token;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private	$isActive;
    /**
     * @ORM\Column(type="datetime")
     */
    private	$createdAt;
}
```

实体和映射添加完可以使用下面命令进行验证：

```
php bin/console doctrine:schema:validate
```

### 创建Get和Set方法

```
php bin/console doctrine:generate:entities AppBundle
```

**Lifecycle Callbacks**

有时，需要在插入、更新或删除实体之前或之后立即执行操作。这些类型的操作称为“生命周期”回调，因为他们是需要在实体生命周期的不同阶段（例如：插入、更新、删除实体等）执行的回调方法

```php
//src/AppBundle/Entity/Job.php
/**
 * @ORM\Entity()
 * @ORM\Table(name="job")
 * @ORM\HasLifecycleCallbacks()
 */
 class Job
 {
   ...
     /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
        {
            $this->createdAt = new \DateTime();
        }
    }    
    /**
     * @ORM\PreUpdate
     * @ORM\PrePersist
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }
 }
```

```php
//src/AppBundle/Entity/Affiliate.php
/**
 * @ORM\Entity()
 * @ORM\Table(name="affiliate")
 * @ORM\HasLifecycleCallbacks()
 */
class Affiliate
{
    ...
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
        {
            $this->createdAt = new \DateTime();
        }
    }
}
```

### 创建数据库表

根据上面创建的带映射的实体生成数据库表

```
php bin/console doctrine:schema:update --force
```

### 填充数据

数据库创建完成后使用 **DoctrineFixturesBundle**  填充数据

```
composer require  --dev doctrine/doctrine-fixtures-bundle
```

添加完  **DoctrineFixturesBundle**，需要在Appkernel.php中注册

```
// app/AppKernel.php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        // ...
        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }return $bundles
    }// ...
}
```

注册完成后、创建添加数据的类

```php
//src/AppBundle/DataFixtures/ORM/LoadCategoryData.php
namespace AppBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Category;
 
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

```php
//src/AppBundle/DataFixtures/ORM/LoadJobData.php
namespace AppBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Job;
 
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
    $job_sensio_labs->setExpiresAt(new \DateTime('2017-10-10'));
 
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
    $job_extreme_sensio->setExpiresAt(new \DateTime('2017-10-10'));
 
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

数据填充完成，执行命令入库

```
php bin/console doctrine:fixtures:load
```

在symfony3 直接执行上面的命令会提示 **fixture** 不是一个服务

```
[ERROR] Could not find any fixture services to load.
```

现在需要到app/config/services.yml注册为服务

```php
//app/config/services.yml
	...
   AppBundle\DataFixtures\:
            resource: '../../src/AppBundle/DataFixtures'
            tags: ['doctrine.fixture.orm']
```

生成之后会有两张图片，放在web/uploads/jobs/

### 验证

Symfony 附带了一个 **Validator** 组件，使验证任务变得简单和透明。验证的目标是告诉我们对象的数据是否有效。我们将配置对象必须遵循的规则列表（称为约束）才能有效。可以通过多种不同的格式（YAML、XML、注释或 PHP）指定这些规则。

首先，在实体中添加 **use Symfony\Component\Validator\Constraints as Assert;**

然后编辑实体类添加约束  NotBlank() 属性不能为空

```php
//src/AppBundle/Entity/Category.php
namespace AppBundle\Entity;use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;    ...
}
```

```php
//src/AppBundle/Entity/Job.php
namespace AppBundle\Entity;use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;/**
 * @ORM\Entity
 * @ORM\Table(name="job")
 * @ORM\HasLifecycleCallbacks()
 */
class Job
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="jobs")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $category;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $type;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $company;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $logo;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $url;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $position;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $location;
    
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $description;
    
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $howToApply;
    
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $token;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isPublic;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActivated;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $email;
    
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     */
    private $expiresAt;
    
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     */
    private $createdAt;
    
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     */
    private $updatedAt;    ...
}
```

```php
//src/AppBundle/Entity/Affiliate.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;/**
 * @ORM\Entity
 * @ORM\Table(name="affiliate")
 * @ORM\HasLifecycleCallbacks()
 */
class Affiliate
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="affiliates")
     * @ORM\JoinTable(name="affiliates_categories")
     */
    private $categories;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $url;    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $token;
    
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     */
    private $createdAt;
```

这里有更多的[验证规则](https://symfony.com/doc/3.3/validation.html)

### 生成CURD

```
php bin/console generate:doctrine:crud --entity=AppBundle:Job --format=annotation --with-write --no-interaction
```



我们还需要向我们的 Category 类添加一个 __toString()方法，以供编辑作业表单中的 Category 下拉列表使用

```php
//src/AppBundle/Entity/Category.php
public function __toString()
{
    return $this->getName();
}
```

更新缓存

```
php bin/console cache:clear --env=prod
```

### 模板优化

​	Symfony 采用mvc的设计模式。模板中采用了装饰器模式，即为模板继承。在`app/Resources/views` 存在 `base.html.twig` 模板，这是默认的模板，将这个模板修替换为下面的代码。

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
      <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css" media="all" />
    {% endblock %}
    {% block javascripts %}
    {% endblock %}
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1><a href="{{ path('job_index') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="Jobeet Job Board" />
          </a></h1>
 
          <div id="sub_header">
            <div class="post">
              <h2>Ask for people</h2>
              <div>
                <a href="{{ path('job_index') }}">Post a Job</a>
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
        {% if app.session.flashbag.has('notice') %}
          {% for message in app.session.flashBag.get('notice') %}
            <div class="flash_notice">
              {{ message }}
            </div>
          {% endfor %}
        {% endif %}
 
        {% if app.session.flashbag.has('error') %}
          {% for message in app.session.flashBag.get('error') %}
            <div class="flash_error">
              {{ message }}
            </div>
          {% endfor %}
        {% endif %}
 
        <div class="content">
            {% block body %}
            {% endblock %}
        </div>
      </div>
 
      <div id="footer">
        <div class="content">
          <span class="symfony">
            <img src="{{ asset('images/jobeet-mini.png') }}" />
            powered by <a href="http://www.symfony.com/">
              <img src="{{ asset('images/symfony.gif') }}" alt="symfony framework" />
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

替换完成后，可以在 `app/Resources/views/job/` 的模板都修改为下面这样

```
{% extends 'base.html.twig' %}
 
{% block body %}
  <!-- template code goes here -->
{% endblock %}
```

刷新页面可以看到样式文件和图片不存在，需要到Github上获取，[获取地址]([https://github.com/dragosholban/jobeet-sf2.8/tree/day4/web/](https://github.com/dragosholban/jobeet-sf2.8/tree/day4/web/images))  

获取到的css 和images 放到web 下即可。

```html
<!--app/Resources/views/job/index.html.twig -->
{% extends 'base.html.twig' %}
 
{% block stylesheets %}
  {{ parent() }}
  <link rel="stylesheet" href="{{ asset('css/jobs.css') }}" type="text/css" media="all" />
{% endblock %}
 
{% block body %}
    <div id="jobs">
        <table class="jobs">
            {% for job in jobs %}
                <tr class="{{ cycle(['even', 'odd'], loop.index) }}">
                    <td class="location">{{ job.location }}</td>
                    <td class="position">
                        <a href="{{ path('job_show', { 'id': job.id }) }}">
                            {{ job.position }}
                        </a>
                    </td>
                    <td class="company">{{ job.company }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}
```

```html
<!--app/Resources/views/job/show.html.twig-->
{% extends 'base.html.twig' %}
 
{% block stylesheets %}
  {{ parent() }}
  <link rel="stylesheet" href="{{ asset('css/job.css') }}" type="text/css" media="all" />
{% endblock %}
{% block body %}
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
        <a href="{{ path('job_edit', { 'id': job.id }) }}">
          Edit
        </a>
      </div>
    </div>
{% endblock %}
```

### 路由

让人看到就能明白什么意思，例如：

```
/job/sensio-labs/paris-france/1/web-developer
```

对应的url应该设置成

```
/job/{company}/{location}/{id}/{position}
```

```php
//src/AppBundle/Controller/JobController.php
/**
 * Finds and displays a job entity.
 *
 * @Route("/job/{company}/{location}/{id}/{position}", name="job_show")
 * @Method("GET")
 */
public function showAction(Job $job)
```

```html
<!-- app/Resources/views/job/index.html.twig-->
<a href="{{ path('job_show', { 'id': job.id, 'company': job.company, 'location': job.location, 'position': job.position }) }}">
    {{ job.position }}
</a>
```

有时候需要替换所有非 ASCII 字符

```php
//src/AppBundle/Entity/Job.php
use AppBundle\Utils\Jobeet as Jobeet;
// ...class Job
{
    // ...
    public function getCompanySlug()
    {
        return Jobeet::slugify($this->getCompany());
    }
 
    public function getPositionSlug()
    {
        return Jobeet::slugify($this->getPosition());
    }
 
    public function getLocationSlug()
    {
        return Jobeet::slugify($this->getLocation());
    }
}
```

创建 ``src/AppBundle/Utils/Jobeet.php``

```php
namespace AppBundle\Utils;class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);
 
        // trim and lowercase
        $text = strtolower(trim($text, '-'));
 
        return $text;
    }
}
```

更新传值，替换非 ASCII 字符

```html
<!--app/Resources/views/job/index.html.twig-->
<a href="{{ path('job_show', { 'id': job.id, 'company': job.companySlug, 'location': job.locationSlug, 'position': job.positionSlug }) }}">
    {{ job.position }}
</a>
```

设置id类型只能是数字

```php 
//src/AppBundle/Controller/JobController.php
/**
 * Finds and displays a job entity.
 *
 * @Route("/job/{company}/{location}/{id}/{position}", name="job_show", requirements={"id" = "\d+"})
 * @Method("GET")
 */
```

查看所有的路由

```
php bin/console debug:router
```

查看单独的路由

```
php bin/console debug:router job_show
```

### model 成操作

```php
/**
 * @ORM\Entity()
 * @ORM\Table(name="job")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\JobRepository")
 */
class Job
```

数据操作的目录，给更换到 `Entity` 同级目录的 `Reposity` 文件夹中

```php
/**
 * @ORM\Entity()
 * @ORM\Table(name="job")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JobRepository")
 */
class Job
```

执行试题更新命令

```
php bin/console doctrine:generate:entities AppBundle
```

数据的查询操作就在 `AppBundle/Respository/JobRepository.php` 中进行操作

```php
class JobRepository extends EntityRepository
{
    public function getActiveJobs($category_id = null)
    {
        $qb = $this->createQueryBuilder('j')
            ->where('j.expiresAt > :date')
            ->setParameter('date', date('Y-m-d H:i:s', time()))
            ->orderBy('j.expiresAt', 'DESC');        if($category_id)
        {
            $qb->andWhere('j.category = :category_id')
                ->setParameter('category_id', $category_id);
        }        $query = $qb->getQuery();        return $query->getResult();
    }
}
```

控制层：

```php
//src/AppBundle/Controller/JobController.php
public function indexAction()
{
    $em = $this->getDoctrine()->getManager();    $jobs = $em->getRepository('AppBundle:Job')->getActiveJobs();    return $this->render('job/index.html.twig', array(
        'jobs' => $jobs,
    ));

```

同样在 `Category` 实体设置生成数据库操作

```php
//src/AppBundle/Entity/Category.php
/**
 * @ORM\Entity()
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CategoryRepository")
 */
class Category
```

```
php bin/console doctrine:generate:entities AppBundle
```

增加查询分类查询方法 `AppBundle/Repository/CategoryRepository.php` 

```php
class CategoryRepository extends EntityRepository
{
    public function getWithJobs()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT c FROM AppBundle:Category c LEFT JOIN c.jobs j WHERE j.expiresAt > :date'
        )->setParameter('date', date('Y-m-d H:i:s', time()));        return $query->getResult();
    }
}
```

### 分类

先生成分类的控制器

```
 php bin/console generate:doctrine:crud --entity=AppBundle:Category --format=annotation --with-write --no-interaction
```

在 `AppBundle/Controller/CategoryController.php` 中更改 `category_show` 的路由规则  

```php
//src/AppBundle/Controller/CategoryController.php
<?php 
  
class CategoryController extends Controller
{
  ...
    /**
     * Finds and displays a category entity.
     *
     * @Route("/category/{slug} ", name="category_show")
     * @Method("GET")
     */
    public function showAction(Category $category)
    {
        $deleteForm = $this->createDeleteForm($category);

        return $this->render('category/show.html.twig', array(
            'category' => $category,
            'delete_form' => $deleteForm->createView(),
        ));
    }
  ...
}
```

修改 `Category` 实体

```php
//src/AppBundle/Entity/Category.php
<?php

// ...
use AppBundle\Utils\Jobeet;
// ...
 
class Category
{
    // ...
 
    public function getSlug()
    {
        return Jobeet::slugify($this->getName());
    }
 
    // ...
}
```

然后修改首页模板

```html
<!--app/Resources/views/job/index.html.twig-->
<h1><a href="{{ path('category_show', { 'slug': category.slug }) }}">{{ category.name }}</a></h1>

<!-- ... -->

<table class="jobs">
    <!-- ... -->
</table>
{% if category.moreJobs %}
    <div class="more_jobs">
        and <a href="{{ path('category_show', { 'slug': category.slug }) }}">{{ category.moreJobs }}</a> more...
    </div>
{% endif %}
```

在模板中使用了 `category.morejobs` ，需要在实体中定义

```php
//src/AppBunlde/Entity/Category.php
<?php

// ...
 
private $moreJobs;
 
// ...
 
public function setMoreJobs($jobs)
{
    $this->moreJobs = $jobs >=  0 ? $jobs : 0;
}
 
public function getMoreJobs()
{
    return $this->moreJobs;
}

```

然后在控制器中增加更多查询

```php
//src/AppBundle/Controller/JobController.php
<?php 
 ...
class JobController extends Controller
{
  
   public function indexAction()
    {
     ...
        foreach ($categories as $category) {
          ...
          $category->setMoreJobs($em->getRepository('AppBundle:Job')->countActiveJobs($category->getId()) - $this->container->getParameter('max_jobs_on_homepage'));
        }
    	...
   }
}
```

`JobRepository.php` 增加 `countActiveJobs` 方法

```php
//src/AppBundle/Repository/JobRepository.php
<?php
....
  
public function countActiveJobs($category_id = null)
{
    $qb = $this->createQueryBuilder('j')
        ->select('count(j.id)')
        ->where('j.expiresAt > :date')
        ->setParameter('date', date('Y-m-d H:i:s', time()));
    if($category_id)
    {
        $qb->andWhere('j.category = :category_id')
           ->setParameter('category_id', $category_id);
    }
    $query = $qb->getQuery();
    
    return $query->getSingleScalarResult();
}
```

在 ``src/AppBundle/Entity/Category.php``  增加slug

```php
<?php

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $slug;
```

更新实体

```
php bin/console doctrine:generate:entities AppBundle
```

增加 `setSlugValue` 方法，使用 `PrePersist` lifecycle callback  预先填充

```php
//src/AppBundle/Entity/Category.php
<?php

// ...

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CategoryRepository")
 * @ORM\Table(name="category")
 * @ORM\HasLifecycleCallbacks()
 */
class Category
{
    // ...
    
    /**
     * @ORM\PrePersist
     */
    public function setSlugValue()
    {
        $this->slug = Jobeet::slugify($this->getName());
    }
```

然后删除数据库重新生成书库

```\
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load
```

使用最后一条命令遇到下面这个错误

```
QLSTATE[23000]: Integrity constraint violation: 1048 Column 'slug' cannot be null
```

是因为 ``@ORM\HasLifecycleCallbacks()`` 未添加到实体中

### Unit Tests

`Jobeet::slugify()` 方法测试，是否能正常运行

创建`JobeetTest.php` 在`src/AppBundle/Tests/Utils`  

assertEquals： 测试前后两个值是否相等

```php
<?php

namespace AppBundle\Tests\Utils;

use AppBundle\Utils\Jobeet;
use PHPUnit\Framework\TestCase;

class JobeetTest extends TestCase
{
    public function testSlugify()
    {
        $this->assertEquals('sensio', Jobeet::slugify('Sensio'));
        $this->assertEquals('sensio-labs', Jobeet::slugify('sensio labs'));
        $this->assertEquals('sensio-labs', Jobeet::slugify('sensio   labs'));
        $this->assertEquals('paris-france', Jobeet::slugify('paris,france'));
        $this->assertEquals('sensio', Jobeet::slugify('  sensio'));
        $this->assertEquals('sensio', Jobeet::slugify('sensio  '));
    }
}
```

执行测试，这里是在windows 下

```
 php phpunit ../../src/AppBundle/Tests/Utils/JobeetTest
```

`phpunit` 需要切换到 `vendor/bin` 目录下执行 `php phpunit`

