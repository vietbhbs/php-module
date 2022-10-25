<?php

namespace nguyenanhung\Backend\vietbhbs_module\Http;

/**
 * Class WebServiceBanner
 *
 * @package   nguyenanhung\Backend\vietbhbs_module\Http
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */

class WebServiceBanner extends BaseHttp
{
    /**
     * WebServiceBanner constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
    }

//    public function list(): WebServiceBanner
//    {
//        $data = [
//
//        ]
//    }
}