<?php

namespace ContainerCEYhbGz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder13ff8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer14ab2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16fc4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getConnection', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getMetadataFactory', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getExpressionBuilder', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'beginTransaction', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getCache', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'transactional', array('func' => $func), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->transactional($func);
    }

    public function commit()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'commit', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->commit();
    }

    public function rollback()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'rollback', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getClassMetadata', array('className' => $className), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'createQuery', array('dql' => $dql), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'createNamedQuery', array('name' => $name), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'createQueryBuilder', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'flush', array('entity' => $entity), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'clear', array('entityName' => $entityName), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->clear($entityName);
    }

    public function close()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'close', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->close();
    }

    public function persist($entity)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'persist', array('entity' => $entity), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'remove', array('entity' => $entity), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'refresh', array('entity' => $entity), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'detach', array('entity' => $entity), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'merge', array('entity' => $entity), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'contains', array('entity' => $entity), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getEventManager', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getConfiguration', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'isOpen', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getUnitOfWork', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getProxyFactory', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'initializeObject', array('obj' => $obj), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'getFilters', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'isFiltersStateClean', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'hasFilters', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return $this->valueHolder13ff8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer14ab2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder13ff8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder13ff8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder13ff8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, '__get', ['name' => $name], $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        if (isset(self::$publicProperties16fc4[$name])) {
            return $this->valueHolder13ff8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13ff8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder13ff8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13ff8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder13ff8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, '__isset', array('name' => $name), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13ff8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder13ff8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, '__unset', array('name' => $name), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13ff8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder13ff8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, '__clone', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        $this->valueHolder13ff8 = clone $this->valueHolder13ff8;
    }

    public function __sleep()
    {
        $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, '__sleep', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;

        return array('valueHolder13ff8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer14ab2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer14ab2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer14ab2 && ($this->initializer14ab2->__invoke($valueHolder13ff8, $this, 'initializeProxy', array(), $this->initializer14ab2) || 1) && $this->valueHolder13ff8 = $valueHolder13ff8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder13ff8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder13ff8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
