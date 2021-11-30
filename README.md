# symfony3-Jobeet
symfony3 tutorial 

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



