<?php
class VMware_VCloud_API_AdminCatalogType extends VMware_VCloud_API_CatalogType {
    protected $CatalogStorageProfiles = null;
    protected $ExternalCatalogSubscriptionParams = null;
    protected $PublishExternalCatalogParams = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param VMware_VCloud_API_OwnerType $Owner - [optional]
    * @param VMware_VCloud_API_CatalogItemsType $CatalogItems - [optional]
    * @param boolean $IsPublished - [optional] 
    * @param string $DateCreated - [optional] 
    * @param int $VersionNumber - [optional] 
    * @param VMware_VCloud_API_CatalogStorageProfilesType $CatalogStorageProfiles - [optional]
    * @param VMware_VCloud_API_ExternalCatalogSubscriptionParamsType $ExternalCatalogSubscriptionParams - [optional]
    * @param VMware_VCloud_API_PublishExternalCatalogParamsType $PublishExternalCatalogParams - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $Owner=null, $CatalogItems=null, $IsPublished=null, $DateCreated=null, $VersionNumber=null, $CatalogStorageProfiles=null, $ExternalCatalogSubscriptionParams=null, $PublishExternalCatalogParams=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $Owner, $CatalogItems, $IsPublished, $DateCreated, $VersionNumber);
        $this->CatalogStorageProfiles = $CatalogStorageProfiles;
        $this->ExternalCatalogSubscriptionParams = $ExternalCatalogSubscriptionParams;
        $this->PublishExternalCatalogParams = $PublishExternalCatalogParams;
        $this->tagName = 'AdminCatalog';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getCatalogStorageProfiles() {
        return $this->CatalogStorageProfiles;
    }
    public function setCatalogStorageProfiles($CatalogStorageProfiles) { 
        $this->CatalogStorageProfiles = $CatalogStorageProfiles;
    }
    public function getExternalCatalogSubscriptionParams() {
        return $this->ExternalCatalogSubscriptionParams;
    }
    public function setExternalCatalogSubscriptionParams($ExternalCatalogSubscriptionParams) { 
        $this->ExternalCatalogSubscriptionParams = $ExternalCatalogSubscriptionParams;
    }
    public function getPublishExternalCatalogParams() {
        return $this->PublishExternalCatalogParams;
    }
    public function setPublishExternalCatalogParams($PublishExternalCatalogParams) { 
        $this->PublishExternalCatalogParams = $PublishExternalCatalogParams;
    }
    public function get_tagName() { return $this->tagName; }
    public function set_tagName($tagName) { $this->tagName = $tagName; }
    public function export($name=null, $out='', $level=0, $namespacedef=null, $namespace=null, $rootNS=null) {
        if (!isset($name)) {
            $name = $this->tagName;
        }
        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
        if (is_null($namespace)) {
            $namespace = self::$defaultNS;
        }
        if (is_null($rootNS)) {
            $rootNS = self::$defaultNS;
        }
        if (NULL === $namespacedef) {
            $namespacedef = $this->namespacedef;
            if (0 >= strpos($namespacedef, 'xmlns=')) {
                $namespacedef = ' xmlns="' . self::$defaultNS . '"' . $namespacedef;
            }
        }
        $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, $name, self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, '<' . $ns . $name . $namespacedef);
        $out = $this->exportAttributes($out, $level, $name, $namespacedef, $namespace, $rootNS);
        if ($this->hasContent()) {
            $out = VMware_VCloud_API_Helper::addString($out, ">\n");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportAttributes($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->CatalogStorageProfiles)) {
            $out = $this->CatalogStorageProfiles->export('CatalogStorageProfiles', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ExternalCatalogSubscriptionParams)) {
            $out = $this->ExternalCatalogSubscriptionParams->export('ExternalCatalogSubscriptionParams', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->PublishExternalCatalogParams)) {
            $out = $this->PublishExternalCatalogParams->export('PublishExternalCatalogParams', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->CatalogStorageProfiles) ||
            !is_null($this->ExternalCatalogSubscriptionParams) ||
            !is_null($this->PublishExternalCatalogParams) ||
            parent::hasContent()
            ) {
            return true;
        } else {
            return false;
        }
    }
    public function build($node, $namespaces='') {
        $tagName = $node->tagName;
        $this->tagName = $tagName;
        if (strpos($tagName, ':') > 0) {
            list($namespace, $tagName) = explode(':', $tagName);
            $this->tagName = $tagName;
            $this->namespace[$tagName] = $namespace;
        }
        $this->buildAttributes($node, $namespaces);
        $children = $node->childNodes;
        foreach ($children as $child) {
            if ($child->nodeType == XML_ELEMENT_NODE || $child->nodeType == XML_TEXT_NODE) {
                $namespace = '';
                $nodeName = $child->nodeName;
                if (strpos($nodeName, ':') > 0) {
                    list($namespace, $nodeName) = explode(':', $nodeName);
                }
                $this->buildChildren($child, $nodeName, $namespace);
            }
        }
    }
    protected function buildAttributes($node, $namespaces='') {
        $attrs = $node->attributes;
        if (!empty($namespaces)) {
            $this->namespacedef = VMware_VCloud_API_Helper::constructNS($attrs, $namespaces, $this->namespacedef) . $this->namespacedef;
        }
        $nsUri = self::$defaultNS;
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogStorageProfiles') {
            $obj = new VMware_VCloud_API_CatalogStorageProfilesType();
            $obj->build($child);
            $obj->set_tagName('CatalogStorageProfiles');
            $this->setCatalogStorageProfiles($obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogStorageProfiles'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExternalCatalogSubscriptionParams') {
            $obj = new VMware_VCloud_API_ExternalCatalogSubscriptionParamsType();
            $obj->build($child);
            $obj->set_tagName('ExternalCatalogSubscriptionParams');
            $this->setExternalCatalogSubscriptionParams($obj);
            if (!empty($namespace)) {
                $this->namespace['ExternalCatalogSubscriptionParams'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PublishExternalCatalogParams') {
            $obj = new VMware_VCloud_API_PublishExternalCatalogParamsType();
            $obj->build($child);
            $obj->set_tagName('PublishExternalCatalogParams');
            $this->setPublishExternalCatalogParams($obj);
            if (!empty($namespace)) {
                $this->namespace['PublishExternalCatalogParams'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}