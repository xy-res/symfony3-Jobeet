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
  Ens\JobeetBundle\DataFixtures\:
     resource: '../../src/Ens/JobeetBundle/DataFixtures'
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

