<?php
class VMware_VCloud_API_ComposeVAppParamsType extends VMware_VCloud_API_VAppCreationParamsType {
    protected $linkedClone = null;
    protected $SourcedItem = array();
    protected $AllEULAsAccepted = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param boolean $powerOn - [optional] an attribute, 
    * @param boolean $deploy - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $VAppParent - [optional]
    * @param VMware_VCloud_API_InstantiationParamsType $InstantiationParams - [optional]
    * @param boolean $linkedClone - [optional] an attribute, 
    * @param array $SourcedItem - [optional] an array of VMware_VCloud_API_SourcedCompositionItemParamType objects
    * @param boolean $AllEULAsAccepted - [optional] 
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $powerOn=null, $deploy=null, $VAppParent=null, $InstantiationParams=null, $linkedClone=null, $SourcedItem=null, $AllEULAsAccepted=null) {
        parent::__construct($VCloudExtension, $name, $Description, $powerOn, $deploy, $VAppParent, $InstantiationParams);
        $this->linkedClone = $linkedClone;
        if (!is_null($SourcedItem)) {
            $this->SourcedItem = $SourcedItem;
        }
        $this->AllEULAsAccepted = $AllEULAsAccepted;
        $this->tagName = 'ComposeVAppParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSourcedItem() {
        return $this->SourcedItem;
    }
    public function setSourcedItem($SourcedItem) { 
        $this->SourcedItem = $SourcedItem;
    }
    public function addSourcedItem($value) { array_push($this->SourcedItem, $value); }
    public function getAllEULAsAccepted() {
        return $this->AllEULAsAccepted;
    }
    public function setAllEULAsAccepted($AllEULAsAccepted) { 
        $this->AllEULAsAccepted = $AllEULAsAccepted;
    }
    public function get_linkedClone(){
        return $this->linkedClone;
    }
    public function set_linkedClone($linkedClone) {
        $this->linkedClone = $linkedClone;
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
        if (!is_null($this->linkedClone)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'linkedClone', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'linkedClone=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->linkedClone, $input_name='linkedClone')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (isset($this->SourcedItem)) {
            foreach ($this->SourcedItem as $SourcedItem) {
                $out = $SourcedItem->export('SourcedItem', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->AllEULAsAccepted)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AllEULAsAccepted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AllEULAsAccepted>" . VMware_VCloud_API_Helper::format_boolean($this->AllEULAsAccepted, $input_name='AllEULAsAccepted') . "</" . $ns . "AllEULAsAccepted>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->SourcedItem) ||
            !is_null($this->AllEULAsAccepted) ||
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
        $ndlinkedClone = $attrs->getNamedItem('linkedClone');
        if (!is_null($ndlinkedClone)) {
            $this->linkedClone = VMware_VCloud_API_Helper::get_boolean($ndlinkedClone->value);
            if (isset($ndlinkedClone->prefix)) {
                $this->namespace['linkedClone'] = $ndlinkedClone->prefix;
                $nsUri = $ndlinkedClone->lookupNamespaceURI($ndlinkedClone->prefix);
            }
            $node->removeAttributeNS($nsUri, 'linkedClone');
        } else {
            $this->linkedClone = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SourcedItem') {
            $obj = new VMware_VCloud_API_SourcedCompositionItemParamType();
            $obj->build($child);
            $obj->set_tagName('SourcedItem');
            array_push($this->SourcedItem, $obj);
            if (!empty($namespace)) {
                $this->namespace['SourcedItem'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllEULAsAccepted') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AllEULAsAccepted = $sval;
            if (!empty($namespace)) {
                $this->namespace['AllEULAsAccepted'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}