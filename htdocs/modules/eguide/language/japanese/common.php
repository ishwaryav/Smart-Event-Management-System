<?php
# user/admin common use resources
# $Id: common.php,v 1.1 2010/04/04 04:13:25 nobu Exp $

define("_MD_ORDER_DATE","��������");
define("_MD_CSV_OUT","CSV����");
define('_MD_EXTENT_DATE','������');
define('_MD_RESERV_PERSONS','���');
define("_MD_INFO_REQUEST","�᡼�����δ�˾��");
define("_MD_INFO_COUNT","���: %d");

global $expire_set,$edit_style,$ev_stats,$ev_extents,$rv_stats;

$expire_set = array(''=>'�� �ƥ����Ȼ���', '+0'=>'���ϻ�', '+3600'=>'1����',
		    '+86400'=>'����', '+172800'=>'2����',
		    '+259200'=>'3����', '+604800'=>'1���ָ�');

$edit_style=array(0=>'XOOPS �����Τ��Ѵ�',
		  1=>'���Ԥ򥿥�&lt;br&gt;���Ѵ�',
		  2=>'HTML ������̵���ˤ���');

$ev_stats=array(0=>'�Ǻ���',
		1=>'��ǧ��',
		4=>'���');

$rv_stats=array(0=>'��ǧ��',
		1=>'ͽ��',
		2=>'����');

$ev_extents=array('none'=>'���Τ�',
		  'daily'=>'����', 'weekly'=>'�轵', 'monthly'=>'���');

?>
