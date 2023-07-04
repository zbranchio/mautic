<?php

namespace Proxies\__CG__\Mautic\DynamicContentBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DynamicContent extends \Mautic\DynamicContentBundle\Entity\DynamicContent implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'id', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'name', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'description', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'category', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'content', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'utmTags', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'sentCount', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'stats', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'isCampaignBased', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'slotName', 'changes', 'new', 'deletedId', 'pastChanges', 'languageSlug', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'translationChildren', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'translationParent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'language', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantChildren', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantParent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantSettings', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantStartDate', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'filters'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'id', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'name', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'description', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'category', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'content', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'utmTags', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'sentCount', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'stats', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'isCampaignBased', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'slotName', 'changes', 'new', 'deletedId', 'pastChanges', 'languageSlug', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'translationChildren', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'translationParent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'language', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantChildren', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantParent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantSettings', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'variantStartDate', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\DynamicContent' . "\0" . 'filters'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DynamicContent $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function clearStats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearStats', []);

        return parent::clearStats();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUp', []);

        return parent::getPublishUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishUp($publishUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishUp', [$publishUp]);

        return parent::setPublishUp($publishUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDown', []);

        return parent::getPublishDown();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishDown($publishDown)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishDown', [$publishDown]);

        return parent::setPublishDown($publishDown);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getSentCount($includeVariants = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSentCount', [$includeVariants]);

        return parent::getSentCount($includeVariants);
    }

    /**
     * {@inheritDoc}
     */
    public function setSentCount($sentCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSentCount', [$sentCount]);

        return parent::setSentCount($sentCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getStats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStats', []);

        return parent::getStats();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsCampaignBased()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsCampaignBased', []);

        return parent::getIsCampaignBased();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsCampaignBased($isCampaignBased)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsCampaignBased', [$isCampaignBased]);

        return parent::setIsCampaignBased($isCampaignBased);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlotName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlotName', []);

        return parent::getSlotName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlotName($slotName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlotName', [$slotName]);

        return parent::setSlotName($slotName);
    }

    /**
     * {@inheritDoc}
     */
    public function cleanSlotName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cleanSlotName', []);

        return parent::cleanSlotName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtmTags(array $utmTags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtmTags', [$utmTags]);

        return parent::setUtmTags($utmTags);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtmTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtmTags', []);

        return parent::getUtmTags();
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', [$checkPublishStatus, $checkCategoryStatus]);

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', [$checkedOut]);

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', []);

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', [$checkedOutBy]);

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', []);

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', []);

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNew', []);

        return parent::setNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', []);

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', []);

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', []);

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', [$createdByUser]);

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', [$modifiedByUser]);

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', [$checkedOutByUser]);

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        return parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        return parent::setChanges($changes);
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslationChild(\Mautic\CoreBundle\Entity\TranslationEntityInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslationChild', [$child]);

        return parent::addTranslationChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslationChild(\Mautic\CoreBundle\Entity\TranslationEntityInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslationChild', [$child]);

        return parent::removeTranslationChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationChildren', []);

        return parent::getTranslationChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranslationParent(\Mautic\CoreBundle\Entity\TranslationEntityInterface $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranslationParent', [$parent]);

        return parent::setTranslationParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationParent', []);

        return parent::getTranslationParent();
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslationParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslationParent', []);

        return parent::removeTranslationParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', [$language]);

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', []);

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function isTranslation($isChild = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTranslation', [$isChild]);

        return parent::isTranslation($isChild);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslations', []);

        return parent::hasTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function clearTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearTranslations', []);

        return parent::clearTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations($onlyChildren = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', [$onlyChildren]);

        return parent::getTranslations($onlyChildren);
    }

    /**
     * {@inheritDoc}
     */
    public function addVariantChild(\Mautic\CoreBundle\Entity\VariantEntityInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVariantChild', [$child]);

        return parent::addVariantChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVariantChild(\Mautic\CoreBundle\Entity\VariantEntityInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVariantChild', [$child]);

        return parent::removeVariantChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantChildren', []);

        return parent::getVariantChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantParent(\Mautic\CoreBundle\Entity\VariantEntityInterface $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantParent', [$parent]);

        return parent::setVariantParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantParent', []);

        return parent::getVariantParent();
    }

    /**
     * {@inheritDoc}
     */
    public function removeVariantParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVariantParent', []);

        return parent::removeVariantParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantSettings($variantSettings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantSettings', [$variantSettings]);

        return parent::setVariantSettings($variantSettings);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantSettings', []);

        return parent::getVariantSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantStartDate', []);

        return parent::getVariantStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantStartDate($variantStartDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantStartDate', [$variantStartDate]);

        return parent::setVariantStartDate($variantStartDate);
    }

    /**
     * {@inheritDoc}
     */
    public function isVariant($isChild = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVariant', [$isChild]);

        return parent::isVariant($isChild);
    }

    /**
     * {@inheritDoc}
     */
    public function hasVariants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasVariants', []);

        return parent::hasVariants();
    }

    /**
     * {@inheritDoc}
     */
    public function clearVariants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearVariants', []);

        return parent::clearVariants();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariants(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariants', []);

        return parent::getVariants();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedEntityIds($publishedOnly = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedEntityIds', [$publishedOnly]);

        return parent::getRelatedEntityIds($publishedOnly);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilters', []);

        return parent::getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilters($filters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilters', [$filters]);

        return parent::setFilters($filters);
    }

}
