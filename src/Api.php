<?php

namespace Pbmedia\Networking4all;

class Api extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
      'createRelation' => 'Pbmedia\\Networking4all\\createRelation',
      'createRelationResponse' => 'Pbmedia\\Networking4all\\createRelationResponse',
      'createRelationDomain' => 'Pbmedia\\Networking4all\\createRelationDomain',
      'createRelationDomainResponse' => 'Pbmedia\\Networking4all\\createRelationDomainResponse',
      'deleteRelation' => 'Pbmedia\\Networking4all\\deleteRelation',
      'deleteRelationResponse' => 'Pbmedia\\Networking4all\\deleteRelationResponse',
      'deleteRelationDomain' => 'Pbmedia\\Networking4all\\deleteRelationDomain',
      'deleteRelationDomainResponse' => 'Pbmedia\\Networking4all\\deleteRelationDomainResponse',
      'updateRelation' => 'Pbmedia\\Networking4all\\updateRelation',
      'updateRelationResponse' => 'Pbmedia\\Networking4all\\updateRelationResponse',
      'updateRelationDomain' => 'Pbmedia\\Networking4all\\updateRelationDomain',
      'updateRelationDomainResponse' => 'Pbmedia\\Networking4all\\updateRelationDomainResponse',
      'Telephone' => 'Pbmedia\\Networking4all\\Telephone',
      'Address' => 'Pbmedia\\Networking4all\\Address',
      'Account' => 'Pbmedia\\Networking4all\\Account',
      'Contact' => 'Pbmedia\\Networking4all\\Contact',
      'Company' => 'Pbmedia\\Networking4all\\Company',
      'Financial' => 'Pbmedia\\Networking4all\\Financial',
      'getRelation' => 'Pbmedia\\Networking4all\\getRelation',
      'getRelationResponse' => 'Pbmedia\\Networking4all\\getRelationResponse',
      'Audit' => 'Pbmedia\\Networking4all\\Audit',
      'ResponseRelationGet' => 'Pbmedia\\Networking4all\\ResponseRelationGet',
      'Error' => 'Pbmedia\\Networking4all\\Error',
      'Auth' => 'Pbmedia\\Networking4all\\Auth',
      'RequestHeader' => 'Pbmedia\\Networking4all\\RequestHeader',
      'ResponseHeader' => 'Pbmedia\\Networking4all\\ResponseHeader',
      'Errors' => 'Pbmedia\\Networking4all\\Errors',
      'ResponseRelation' => 'Pbmedia\\Networking4all\\ResponseRelation',
      'RequestRelation' => 'Pbmedia\\Networking4all\\RequestRelation',
      'RequestRelationUpdate' => 'Pbmedia\\Networking4all\\RequestRelationUpdate',
      'RequestRelationCreate' => 'Pbmedia\\Networking4all\\RequestRelationCreate',
      'OptionsRelation' => 'Pbmedia\\Networking4all\\OptionsRelation',
      'getRelationContacts' => 'Pbmedia\\Networking4all\\getRelationContacts',
      'getRelationContactsResponse' => 'Pbmedia\\Networking4all\\getRelationContactsResponse',
      'ItemContact' => 'Pbmedia\\Networking4all\\ItemContact',
      'ResponseRelationGetContact' => 'Pbmedia\\Networking4all\\ResponseRelationGetContact',
      'addRelationContacts' => 'Pbmedia\\Networking4all\\addRelationContacts',
      'addRelationContactsResponse' => 'Pbmedia\\Networking4all\\addRelationContactsResponse',
      'RequestRelationContacts' => 'Pbmedia\\Networking4all\\RequestRelationContacts',
      'ResponseRelationContacts' => 'Pbmedia\\Networking4all\\ResponseRelationContacts',
      'removeRelationContacts' => 'Pbmedia\\Networking4all\\removeRelationContacts',
      'removeRelationContactsResponse' => 'Pbmedia\\Networking4all\\removeRelationContactsResponse',
      'getRelationResellerClients' => 'Pbmedia\\Networking4all\\getRelationResellerClients',
      'getRelationResellerClientsResponse' => 'Pbmedia\\Networking4all\\getRelationResellerClientsResponse',
      'RequestRelationClients' => 'Pbmedia\\Networking4all\\RequestRelationClients',
      'ResponseRelationClients' => 'Pbmedia\\Networking4all\\ResponseRelationClients',
      'addRelationResellerClients' => 'Pbmedia\\Networking4all\\addRelationResellerClients',
      'addRelationResellerClientsResponse' => 'Pbmedia\\Networking4all\\addRelationResellerClientsResponse',
      'removeRelationResellerClients' => 'Pbmedia\\Networking4all\\removeRelationResellerClients',
      'removeRelationResellerClientsResponse' => 'Pbmedia\\Networking4all\\removeRelationResellerClientsResponse',
      'getSSLCertificateApproverList' => 'Pbmedia\\Networking4all\\getSSLCertificateApproverList',
      'getSSLCertificateApproverListResponse' => 'Pbmedia\\Networking4all\\getSSLCertificateApproverListResponse',
      'RequestApproverList' => 'Pbmedia\\Networking4all\\RequestApproverList',
      'ResponseApproverList' => 'Pbmedia\\Networking4all\\ResponseApproverList',
      'checkSSLCertificateCSR' => 'Pbmedia\\Networking4all\\checkSSLCertificateCSR',
      'checkSSLCertificateCSRResponse' => 'Pbmedia\\Networking4all\\checkSSLCertificateCSRResponse',
      'RequestCSR' => 'Pbmedia\\Networking4all\\RequestCSR',
      'ResponseCSR' => 'Pbmedia\\Networking4all\\ResponseCSR',
      'orderSSLCertificate' => 'Pbmedia\\Networking4all\\orderSSLCertificate',
      'orderSSLCertificateResponse' => 'Pbmedia\\Networking4all\\orderSSLCertificateResponse',
      'RequestSSLOrder' => 'Pbmedia\\Networking4all\\RequestSSLOrder',
      'ResponseSSLOrder' => 'Pbmedia\\Networking4all\\ResponseSSLOrder',
      'getProduct' => 'Pbmedia\\Networking4all\\getProduct',
      'getProductResponse' => 'Pbmedia\\Networking4all\\getProductResponse',
      'RequestProduct' => 'Pbmedia\\Networking4all\\RequestProduct',
      'ResponseProduct' => 'Pbmedia\\Networking4all\\ResponseProduct',
      'ResponseDescription' => 'Pbmedia\\Networking4all\\ResponseDescription',
      'replaceSSLCertificate' => 'Pbmedia\\Networking4all\\replaceSSLCertificate',
      'replaceSSLCertificateResponse' => 'Pbmedia\\Networking4all\\replaceSSLCertificateResponse',
      'RequestSSLReplace' => 'Pbmedia\\Networking4all\\RequestSSLReplace',
      'ResponseSSLReplace' => 'Pbmedia\\Networking4all\\ResponseSSLReplace',
      'resendEmailSSLCertificate' => 'Pbmedia\\Networking4all\\resendEmailSSLCertificate',
      'resendEmailSSLCertificateResponse' => 'Pbmedia\\Networking4all\\resendEmailSSLCertificateResponse',
      'RequestResendEmail' => 'Pbmedia\\Networking4all\\RequestResendEmail',
      'ResponseResendEmail' => 'Pbmedia\\Networking4all\\ResponseResendEmail',
      'getReceivedOrders' => 'Pbmedia\\Networking4all\\getReceivedOrders',
      'getReceivedOrdersResponse' => 'Pbmedia\\Networking4all\\getReceivedOrdersResponse',
      'orderType' => 'Pbmedia\\Networking4all\\orderType',
      'ResponseOrders' => 'Pbmedia\\Networking4all\\ResponseOrders',
      'requestOrders' => 'Pbmedia\\Networking4all\\requestOrders',
      'RequestReceivedOrders' => 'Pbmedia\\Networking4all\\RequestReceivedOrders',
      'ProductFees' => 'Pbmedia\\Networking4all\\ProductFees',
      'ProductSetup' => 'Pbmedia\\Networking4all\\ProductSetup',
      'ProductFee' => 'Pbmedia\\Networking4all\\ProductFee',
      'getSSLCertificateOrder' => 'Pbmedia\\Networking4all\\getSSLCertificateOrder',
      'getSSLCertificateOrderResponse' => 'Pbmedia\\Networking4all\\getSSLCertificateOrderResponse',
      'RequestOrder' => 'Pbmedia\\Networking4all\\RequestOrder',
      'ResponseOrder' => 'Pbmedia\\Networking4all\\ResponseOrder',
      'ResponseFulfillment' => 'Pbmedia\\Networking4all\\ResponseFulfillment',
      'ResponseCACert' => 'Pbmedia\\Networking4all\\ResponseCACert',
      'ResponseCACerts' => 'Pbmedia\\Networking4all\\ResponseCACerts',
      'ResponseOrderStatus' => 'Pbmedia\\Networking4all\\ResponseOrderStatus',
      'ResponseSan' => 'Pbmedia\\Networking4all\\ResponseSan',
      'ResponseProducts' => 'Pbmedia\\Networking4all\\ResponseProducts',
      'checkDomain' => 'Pbmedia\\Networking4all\\checkDomain',
      'checkDomainResponse' => 'Pbmedia\\Networking4all\\checkDomainResponse',
      'RequestDomainCheck' => 'Pbmedia\\Networking4all\\RequestDomainCheck',
      'ResponseDomainCheck' => 'Pbmedia\\Networking4all\\ResponseDomainCheck',
      'DomainCheck' => 'Pbmedia\\Networking4all\\DomainCheck',
      'orderDomain' => 'Pbmedia\\Networking4all\\orderDomain',
      'orderDomainResponse' => 'Pbmedia\\Networking4all\\orderDomainResponse',
      'RequestDomainOrder' => 'Pbmedia\\Networking4all\\RequestDomainOrder',
      'Nameserver' => 'Pbmedia\\Networking4all\\Nameserver',
      'ResponseDomainOrder' => 'Pbmedia\\Networking4all\\ResponseDomainOrder',
      'nameServerChange' => 'Pbmedia\\Networking4all\\nameServerChange',
      'nameServerChangeResponse' => 'Pbmedia\\Networking4all\\nameServerChangeResponse',
      'RequestNameServerChange' => 'Pbmedia\\Networking4all\\RequestNameServerChange',
      'ResponseNameServerChange' => 'Pbmedia\\Networking4all\\ResponseNameServerChange',
      'getSSLCertificateOrderList' => 'Pbmedia\\Networking4all\\getSSLCertificateOrderList',
      'getSSLCertificateOrderListResponse' => 'Pbmedia\\Networking4all\\getSSLCertificateOrderListResponse',
      'RequestOrderList' => 'Pbmedia\\Networking4all\\RequestOrderList',
      'ResponseOrderList' => 'Pbmedia\\Networking4all\\ResponseOrderList',
      'getDomainOrder' => 'Pbmedia\\Networking4all\\getDomainOrder',
      'getDomainOrderResponse' => 'Pbmedia\\Networking4all\\getDomainOrderResponse',
      'RequestGetDomainOrder' => 'Pbmedia\\Networking4all\\RequestGetDomainOrder',
      'ResponseGetDomainOrder' => 'Pbmedia\\Networking4all\\ResponseGetDomainOrder',
      'getDomainList' => 'Pbmedia\\Networking4all\\getDomainList',
      'getDomainListResponse' => 'Pbmedia\\Networking4all\\getDomainListResponse',
      'ResponseDomainOrderList' => 'Pbmedia\\Networking4all\\ResponseDomainOrderList',
      'Warnings' => 'Pbmedia\\Networking4all\\Warnings',
      'getDomain' => 'Pbmedia\\Networking4all\\getDomain',
      'getDomainResponse' => 'Pbmedia\\Networking4all\\getDomainResponse',
      'getSSLCertificate' => 'Pbmedia\\Networking4all\\getSSLCertificate',
      'getSSLCertificateResponse' => 'Pbmedia\\Networking4all\\getSSLCertificateResponse',
      'getSSLCertificateList' => 'Pbmedia\\Networking4all\\getSSLCertificateList',
      'getSSLCertificateListResponse' => 'Pbmedia\\Networking4all\\getSSLCertificateListResponse',
      'updateDomain' => 'Pbmedia\\Networking4all\\updateDomain',
      'updateDomainResponse' => 'Pbmedia\\Networking4all\\updateDomainResponse',
      'RequestUpdateDomain' => 'Pbmedia\\Networking4all\\RequestUpdateDomain',
      'ResponseUpdateDomain' => 'Pbmedia\\Networking4all\\ResponseUpdateDomain',
      'cancelDomain' => 'Pbmedia\\Networking4all\\cancelDomain',
      'cancelDomainResponse' => 'Pbmedia\\Networking4all\\cancelDomainResponse',
      'RequestCancelDomain' => 'Pbmedia\\Networking4all\\RequestCancelDomain',
      'ResponseCancelDomain' => 'Pbmedia\\Networking4all\\ResponseCancelDomain',
      'updateSSLCertificate' => 'Pbmedia\\Networking4all\\updateSSLCertificate',
      'updateSSLCertificateResponse' => 'Pbmedia\\Networking4all\\updateSSLCertificateResponse',
      'RequestSSLUpdate' => 'Pbmedia\\Networking4all\\RequestSSLUpdate',
      'ResponseMalwareScan' => 'Pbmedia\\Networking4all\\ResponseMalwareScan',
      'ResponseScanResults' => 'Pbmedia\\Networking4all\\ResponseScanResults',
      'ResponseExtraServicesResult' => 'Pbmedia\\Networking4all\\ResponseExtraServicesResult',
      'ResponseScanServices' => 'Pbmedia\\Networking4all\\ResponseScanServices',
      'ResponseInfection' => 'Pbmedia\\Networking4all\\ResponseInfection',
      'ResponseProductDetails' => 'Pbmedia\\Networking4all\\ResponseProductDetails',
      'changeSANSSLCertificate' => 'Pbmedia\\Networking4all\\changeSANSSLCertificate',
      'changeSANSSLCertificateResponse' => 'Pbmedia\\Networking4all\\changeSANSSLCertificateResponse',
      'RequestChangeSAN' => 'Pbmedia\\Networking4all\\RequestChangeSAN',
      'ResponseChangeSAN' => 'Pbmedia\\Networking4all\\ResponseChangeSAN',
      'PreRegistration' => 'Pbmedia\\Networking4all\\PreRegistration',
      'ResponseSubstatusses' => 'Pbmedia\\Networking4all\\ResponseSubstatusses',
      'ResponseSubstatus' => 'Pbmedia\\Networking4all\\ResponseSubstatus',
      'ResponseGetSSLOption' => 'Pbmedia\\Networking4all\\ResponseGetSSLOption',
      'getProducts' => 'Pbmedia\\Networking4all\\getProducts',
      'getProductsResponse' => 'Pbmedia\\Networking4all\\getProductsResponse',
      'RequestGetProducts' => 'Pbmedia\\Networking4all\\RequestGetProducts',
      'ResponseGetProducts' => 'Pbmedia\\Networking4all\\ResponseGetProducts',
      'Products' => 'Pbmedia\\Networking4all\\Products',
      'Product' => 'Pbmedia\\Networking4all\\Product',
      'RequestSSLOrderOptions' => 'Pbmedia\\Networking4all\\RequestSSLOrderOptions',
      'getDnsRecords' => 'Pbmedia\\Networking4all\\getDnsRecords',
      'RequestGetDnsRecords' => 'Pbmedia\\Networking4all\\RequestGetDnsRecords',
      'getDnsRecordsResponse' => 'Pbmedia\\Networking4all\\getDnsRecordsResponse',
      'ResponseGetDnsRecords' => 'Pbmedia\\Networking4all\\ResponseGetDnsRecords',
      'DnsRecords' => 'Pbmedia\\Networking4all\\DnsRecords',
      'DnsRecord' => 'Pbmedia\\Networking4all\\DnsRecord',
      'addDnsRecords' => 'Pbmedia\\Networking4all\\addDnsRecords',
      'RequestAddDnsRecords' => 'Pbmedia\\Networking4all\\RequestAddDnsRecords',
      'AddDnsRecords' => 'Pbmedia\\Networking4all\\AddDnsRecords',
      'addDnsRecord' => 'Pbmedia\\Networking4all\\addDnsRecord',
      'addDnsRecordsResponse' => 'Pbmedia\\Networking4all\\addDnsRecordsResponse',
      'ResponseAddDnsRecords' => 'Pbmedia\\Networking4all\\ResponseAddDnsRecords',
      'updateDnsRecords' => 'Pbmedia\\Networking4all\\updateDnsRecords',
      'RequestUpdateDnsRecords' => 'Pbmedia\\Networking4all\\RequestUpdateDnsRecords',
      'UpdateDnsRecords' => 'Pbmedia\\Networking4all\\UpdateDnsRecords',
      'UpdateDnsRecord' => 'Pbmedia\\Networking4all\\UpdateDnsRecord',
      'UpdateDnsRecordOld' => 'Pbmedia\\Networking4all\\UpdateDnsRecordOld',
      'UpdateDnsRecordNew' => 'Pbmedia\\Networking4all\\UpdateDnsRecordNew',
      'updateDnsRecordsResponse' => 'Pbmedia\\Networking4all\\updateDnsRecordsResponse',
      'ResponseUpdateDnsRecords' => 'Pbmedia\\Networking4all\\ResponseUpdateDnsRecords',
      'deleteDnsRecords' => 'Pbmedia\\Networking4all\\deleteDnsRecords',
      'RequestDeleteDnsRecords' => 'Pbmedia\\Networking4all\\RequestDeleteDnsRecords',
      'DeleteDnsRecords' => 'Pbmedia\\Networking4all\\DeleteDnsRecords',
      'DeleteDnsRecord' => 'Pbmedia\\Networking4all\\DeleteDnsRecord',
      'deleteDnsRecordsResponse' => 'Pbmedia\\Networking4all\\deleteDnsRecordsResponse',
      'ResponseDeleteDnsRecords' => 'Pbmedia\\Networking4all\\ResponseDeleteDnsRecords',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
      'features' => 1,
    ), $options);
        if (!$wsdl) {
            $wsdl = 'https://www.networking4all.com/api/soap/api.wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param createRelation $parameters
     * @return createRelationResponse
     */
    public function createRelation(createRelation $parameters)
    {
        return $this->__soapCall('createRelation', array($parameters));
    }

    /**
     * @param createRelationDomain $parameters
     * @return createRelationDomainResponse
     */
    public function createRelationDomain(createRelationDomain $parameters)
    {
        return $this->__soapCall('createRelationDomain', array($parameters));
    }

    /**
     * @param updateRelation $parameters
     * @return updateRelationResponse
     */
    public function updateRelation(updateRelation $parameters)
    {
        return $this->__soapCall('updateRelation', array($parameters));
    }

    /**
     * @param updateRelationDomain $parameters
     * @return updateRelationDomainResponse
     */
    public function updateRelationDomain(updateRelationDomain $parameters)
    {
        return $this->__soapCall('updateRelationDomain', array($parameters));
    }

    /**
     * @param deleteRelation $parameters
     * @return deleteRelationResponse
     */
    public function deleteRelation(deleteRelation $parameters)
    {
        return $this->__soapCall('deleteRelation', array($parameters));
    }

    /**
     * @param deleteRelationDomain $parameters
     * @return deleteRelationDomainResponse
     */
    public function deleteRelationDomain(deleteRelationDomain $parameters)
    {
        return $this->__soapCall('deleteRelationDomain', array($parameters));
    }

    /**
     * @param getRelation $parameters
     * @return getRelationResponse
     */
    public function getRelation(getRelation $parameters)
    {
        return $this->__soapCall('getRelation', array($parameters));
    }

    /**
     * @param getRelationContacts $parameters
     * @return getRelationContactsResponse
     */
    public function getRelationContacts(getRelationContacts $parameters)
    {
        return $this->__soapCall('getRelationContacts', array($parameters));
    }

    /**
     * @param addRelationContacts $parameters
     * @return addRelationContactsResponse
     */
    public function addRelationContacts(addRelationContacts $parameters)
    {
        return $this->__soapCall('addRelationContacts', array($parameters));
    }

    /**
     * @param removeRelationContacts $parameters
     * @return removeRelationContactsResponse
     */
    public function removeRelationContacts(removeRelationContacts $parameters)
    {
        return $this->__soapCall('removeRelationContacts', array($parameters));
    }

    /**
     * @param getRelationResellerClients $parameters
     * @return getRelationResellerClientsResponse
     */
    public function getRelationResellerClients(getRelationResellerClients $parameters)
    {
        return $this->__soapCall('getRelationResellerClients', array($parameters));
    }

    /**
     * @param addRelationResellerClients $parameters
     * @return addRelationResellerClientsResponse
     */
    public function addRelationResellerClients(addRelationResellerClients $parameters)
    {
        return $this->__soapCall('addRelationResellerClients', array($parameters));
    }

    /**
     * @param removeRelationResellerClients $parameters
     * @return removeRelationResellerClientsResponse
     */
    public function removeRelationResellerClients(removeRelationResellerClients $parameters)
    {
        return $this->__soapCall('removeRelationResellerClients', array($parameters));
    }

    /**
     * @param getSSLCertificateApproverList $parameters
     * @return getSSLCertificateApproverListResponse
     */
    public function getSSLCertificateApproverList(getSSLCertificateApproverList $parameters)
    {
        return $this->__soapCall('getSSLCertificateApproverList', array($parameters));
    }

    /**
     * @param checkSSLCertificateCSR $parameters
     * @return checkSSLCertificateCSRResponse
     */
    public function checkSSLCertificateCSR(checkSSLCertificateCSR $parameters)
    {
        return $this->__soapCall('checkSSLCertificateCSR', array($parameters));
    }

    /**
     * @param orderSSLCertificate $parameters
     * @return orderSSLCertificateResponse
     */
    public function orderSSLCertificate(orderSSLCertificate $parameters)
    {
        return $this->__soapCall('orderSSLCertificate', array($parameters));
    }

    /**
     * @param replaceSSLCertificate $parameters
     * @return replaceSSLCertificateResponse
     */
    public function replaceSSLCertificate(replaceSSLCertificate $parameters)
    {
        return $this->__soapCall('replaceSSLCertificate', array($parameters));
    }

    /**
     * @param resendEmailSSLCertificate $parameters
     * @return resendEmailSSLCertificateResponse
     */
    public function resendEmailSSLCertificate(resendEmailSSLCertificate $parameters)
    {
        return $this->__soapCall('resendEmailSSLCertificate', array($parameters));
    }

    /**
     * @param getSSLCertificateOrder $parameters
     * @return getSSLCertificateOrderResponse
     */
    public function getSSLCertificateOrder(getSSLCertificateOrder $parameters)
    {
        return $this->__soapCall('getSSLCertificateOrder', array($parameters));
    }

    /**
     * @param getProduct $parameters
     * @return getProductResponse
     */
    public function getProduct(getProduct $parameters)
    {
        return $this->__soapCall('getProduct', array($parameters));
    }

    /**
     * @param getReceivedOrders $parameters
     * @return getReceivedOrdersResponse
     */
    public function getReceivedOrders(getReceivedOrders $parameters)
    {
        return $this->__soapCall('getReceivedOrders', array($parameters));
    }

    /**
     * @param checkDomain $parameters
     * @return checkDomainResponse
     */
    public function checkDomain(checkDomain $parameters)
    {
        return $this->__soapCall('checkDomain', array($parameters));
    }

    /**
     * @param orderDomain $parameters
     * @return orderDomainResponse
     */
    public function orderDomain(orderDomain $parameters)
    {
        return $this->__soapCall('orderDomain', array($parameters));
    }

    /**
     * @param nameServerChange $parameters
     * @return nameServerChangeResponse
     */
    public function nameServerChange(nameServerChange $parameters)
    {
        return $this->__soapCall('nameServerChange', array($parameters));
    }

    /**
     * @param getSSLCertificateOrderList $parameters
     * @return getSSLCertificateOrderListResponse
     */
    public function getSSLCertificateOrderList(getSSLCertificateOrderList $parameters)
    {
        return $this->__soapCall('getSSLCertificateOrderList', array($parameters));
    }

    /**
     * @param getDomainOrder $parameters
     * @return getDomainOrderResponse
     */
    public function getDomainOrder(getDomainOrder $parameters)
    {
        return $this->__soapCall('getDomainOrder', array($parameters));
    }

    /**
     * @param getDomain $parameters
     * @return getDomainResponse
     */
    public function getDomain(getDomain $parameters)
    {
        return $this->__soapCall('getDomain', array($parameters));
    }

    /**
     * @param getDomainList $parameters
     * @return getDomainListResponse
     */
    public function getDomainList(getDomainList $parameters)
    {
        return $this->__soapCall('getDomainList', array($parameters));
    }

    /**
     * @param getSSLCertificate $parameters
     * @return getSSLCertificateResponse
     */
    public function getSSLCertificate(getSSLCertificate $parameters)
    {
        return $this->__soapCall('getSSLCertificate', array($parameters));
    }

    /**
     * @param getSSLCertificateList $parameters
     * @return getSSLCertificateListResponse
     */
    public function getSSLCertificateList(getSSLCertificateList $parameters)
    {
        return $this->__soapCall('getSSLCertificateList', array($parameters));
    }

    /**
     * @param updateDomain $parameters
     * @return updateDomainResponse
     */
    public function updateDomain(updateDomain $parameters)
    {
        return $this->__soapCall('updateDomain', array($parameters));
    }

    /**
     * @param cancelDomain $parameters
     * @return cancelDomainResponse
     */
    public function cancelDomain(cancelDomain $parameters)
    {
        return $this->__soapCall('cancelDomain', array($parameters));
    }

    /**
     * @param updateSSLCertificate $parameters
     * @return updateSSLCertificateResponse
     */
    public function updateSSLCertificate(updateSSLCertificate $parameters)
    {
        return $this->__soapCall('updateSSLCertificate', array($parameters));
    }

    /**
     * @param changeSANSSLCertificate $parameters
     * @return changeSANSSLCertificateResponse
     */
    public function changeSANSSLCertificate(changeSANSSLCertificate $parameters)
    {
        return $this->__soapCall('changeSANSSLCertificate', array($parameters));
    }

    /**
     * @param getProducts $parameters
     * @return getProductsResponse
     */
    public function getProducts(getProducts $parameters)
    {
        return $this->__soapCall('getProducts', array($parameters));
    }

    /**
     * @param getDnsRecords $parameters
     * @return getDnsRecordsResponse
     */
    public function getDnsRecords(getDnsRecords $parameters)
    {
        return $this->__soapCall('getDnsRecords', array($parameters));
    }

    /**
     * @param addDnsRecords $parameters
     * @return addDnsRecordsResponse
     */
    public function addDnsRecords(addDnsRecords $parameters)
    {
        return $this->__soapCall('addDnsRecords', array($parameters));
    }

    /**
     * @param updateDnsRecords $parameters
     * @return updateDnsRecordsResponse
     */
    public function updateDnsRecords(updateDnsRecords $parameters)
    {
        return $this->__soapCall('updateDnsRecords', array($parameters));
    }

    /**
     * @param deleteDnsRecords $parameters
     * @return deleteDnsRecordsResponse
     */
    public function deleteDnsRecords(deleteDnsRecords $parameters)
    {
        return $this->__soapCall('deleteDnsRecords', array($parameters));
    }
}
