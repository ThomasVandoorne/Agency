<?php
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

use yii\base\Behavior;

/**
 * Custom field behavior
 *
 * This class provides attributes for all the unique custom field handles.
 *
 * @method static foldImage(mixed $value) Sets the [[foldImage]] property
 * @method static foldTitle(mixed $value) Sets the [[foldTitle]] property
 * @method static foldText(mixed $value) Sets the [[foldText]] property
 * @method static projectName(mixed $value) Sets the [[projectName]] property
 * @method static projectImage(mixed $value) Sets the [[projectImage]] property
 * @method static projectDescription(mixed $value) Sets the [[projectDescription]] property
 * @method static globalText(mixed $value) Sets the [[globalText]] property
 * @method static navigationLinks(mixed $value) Sets the [[navigationLinks]] property
 * @method static linkDestination(mixed $value) Sets the [[linkDestination]] property
 * @method static linkText(mixed $value) Sets the [[linkText]] property
 * @method static workType(mixed $value) Sets the [[workType]] property
 * @method static memberName(mixed $value) Sets the [[memberName]] property
 * @method static photo(mixed $value) Sets the [[photo]] property
 * @method static jobFunction(mixed $value) Sets the [[jobFunction]] property
 * @method static memberInfo(mixed $value) Sets the [[memberInfo]] property
 * @method static socialMedia(mixed $value) Sets the [[socialMedia]] property
 * @method static socialName(mixed $value) Sets the [[socialName]] property
 * @method static socialImage(mixed $value) Sets the [[socialImage]] property
 * @method static contactImage(mixed $value) Sets the [[contactImage]] property
 */
class CustomFieldBehavior extends Behavior
{
    /**
     * @var bool Whether the behavior should provide methods based on the field handles.
     */
    public bool $hasMethods = false;

    /**
     * @var bool Whether properties on the class should be settable directly.
     */
    public bool $canSetProperties = true;

    /**
     * @var string[] List of supported field handles.
     */
    public static $fieldHandles = [
        'foldImage' => true,
        'foldTitle' => true,
        'foldText' => true,
        'projectName' => true,
        'projectImage' => true,
        'projectDescription' => true,
        'globalText' => true,
        'navigationLinks' => true,
        'linkDestination' => true,
        'linkText' => true,
        'workType' => true,
        'memberName' => true,
        'photo' => true,
        'jobFunction' => true,
        'memberInfo' => true,
        'socialMedia' => true,
        'socialName' => true,
        'socialImage' => true,
        'contactImage' => true,
    ];

    /**
     * @var \craft\elements\db\AssetQuery|\craft\elements\ElementCollection<craft\elements\Asset> Value for field with the handle “foldImage”.
     */
    public $foldImage;

    /**
     * @var string|null Value for field with the handle “foldTitle”.
     */
    public $foldTitle;

    /**
     * @var mixed Value for field with the handle “foldText”.
     */
    public $foldText;

    /**
     * @var string|null Value for field with the handle “projectName”.
     */
    public $projectName;

    /**
     * @var \craft\elements\db\AssetQuery|\craft\elements\ElementCollection<craft\elements\Asset> Value for field with the handle “projectImage”.
     */
    public $projectImage;

    /**
     * @var string|null Value for field with the handle “projectDescription”.
     */
    public $projectDescription;

    /**
     * @var mixed Value for field with the handle “globalText”.
     */
    public $globalText;

    /**
     * @var \craft\elements\db\MatrixBlockQuery|\craft\elements\ElementCollection<craft\elements\MatrixBlock> Value for field with the handle “navigationLinks”.
     */
    public $navigationLinks;

    /**
     * @var \craft\elements\db\EntryQuery|\craft\elements\ElementCollection<craft\elements\Entry> Value for field with the handle “linkDestination”.
     */
    public $linkDestination;

    /**
     * @var string|null Value for field with the handle “linkText”.
     */
    public $linkText;

    /**
     * @var \craft\elements\db\CategoryQuery|\craft\elements\ElementCollection<craft\elements\Category> Value for field with the handle “workType”.
     */
    public $workType;

    /**
     * @var string|null Value for field with the handle “memberName”.
     */
    public $memberName;

    /**
     * @var \craft\elements\db\AssetQuery|\craft\elements\ElementCollection<craft\elements\Asset> Value for field with the handle “photo”.
     */
    public $photo;

    /**
     * @var \craft\elements\db\CategoryQuery|\craft\elements\ElementCollection<craft\elements\Category> Value for field with the handle “jobFunction”.
     */
    public $jobFunction;

    /**
     * @var mixed Value for field with the handle “memberInfo”.
     */
    public $memberInfo;

    /**
     * @var \craft\elements\db\MatrixBlockQuery|\craft\elements\ElementCollection<craft\elements\MatrixBlock> Value for field with the handle “socialMedia”.
     */
    public $socialMedia;

    /**
     * @var mixed Value for field with the handle “socialName”.
     */
    public $socialName;

    /**
     * @var \craft\elements\db\AssetQuery|\craft\elements\ElementCollection<craft\elements\Asset> Value for field with the handle “socialImage”.
     */
    public $socialImage;

    /**
     * @var \craft\elements\db\AssetQuery|\craft\elements\ElementCollection<craft\elements\Asset> Value for field with the handle “contactImage”.
     */
    public $contactImage;

    /**
     * @var array Additional custom field values we don’t know about yet.
     */
    private array $_customFieldValues = [];

    /**
     * @inheritdoc
     */
    public function __call($name, $params)
    {
        if ($this->hasMethods && isset(self::$fieldHandles[$name]) && count($params) === 1) {
            $this->$name = $params[0];
            return $this->owner;
        }
        return parent::__call($name, $params);
    }

    /**
     * @inheritdoc
     */
    public function hasMethod($name): bool
    {
        if ($this->hasMethods && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::hasMethod($name);
    }

    /**
     * @inheritdoc
     */
    public function __isset($name): bool
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::__isset($name);
    }

    /**
     * @inheritdoc
     */
    public function __get($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return $this->_customFieldValues[$name] ?? null;
        }
        return parent::__get($name);
    }

    /**
     * @inheritdoc
     */
    public function __set($name, $value)
    {
        if (isset(self::$fieldHandles[$name])) {
            $this->_customFieldValues[$name] = $value;
            return;
        }
        parent::__set($name, $value);
    }

    /**
     * @inheritdoc
     */
    public function canGetProperty($name, $checkVars = true): bool
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canGetProperty($name, $checkVars);
    }

    /**
     * @inheritdoc
     */
    public function canSetProperty($name, $checkVars = true): bool
    {
        if (!$this->canSetProperties) {
            return false;
        }
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canSetProperty($name, $checkVars);
    }
}
