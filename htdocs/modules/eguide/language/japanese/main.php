<?php
// $Id: main.php,v 1.4 2010/10/10 06:30:12 nobu Exp $

if (defined('_MD_RESERV_FORM')) return;

define('_MD_RESERV_FORM','��ͽ��Ϥ�����');
define('_MD_RESERVATION','ͽ�󿽹�');
define('_MD_NAME','/^(��|��)?̾��\*?$/');
define('_MD_SDATE_FMT', 'Yǯm��d��');
define('_MD_STIME_FMT', 'H��iʬ');
global $ev_week;
$ev_week = array('Sun'=>'��', 'Mon'=>'��','Tue'=>'��', 'Wed'=>'��',
		 'Thu'=>'��','Fri'=>'��', 'Sat'=>'��');
define('_MD_POSTED_FMT', 'm');
define('_MD_TIME_FMT', 'm');
define('_MD_READMORE','�ܺ�...');
define('_MD_EMAIL','�᡼��');
define('_MD_EMAIL_CONF','�᡼���ǧ');
define('_MD_EMAIL_CONF_DESC','��ǧ�Τ���⤦���٥᡼�륢�ɥ쥹�����Ϥ��Ƥ�������');
define('_MD_UNAME','�桼��̾');
define('_MD_SUBJECT','ͽ���ǧ - {EVENT_DATE} {EVENT_TITLE}');
define('_MD_NOTIFY_EVENT',  '�����Υ��٥�ȷǺܤ�᡼������Τ���');
define('_MD_NOTIFY_REQUEST','���������٥�Ȱ��⤬��Ͽ���줿��᡼������Τ���');
define('_MD_REQUIRE_MARK', '<em>*</em>');
define('_MD_LISTITEM_FMT', '[%s]');
define('_MD_ORDER_NOTE1', _MD_REQUIRE_MARK.' ��ɬ�ܹ��ܤǤ���');
define('_MD_ORDER_NOTE2','[ ] �ι��ܤϻ��ü԰�����ɽ������ޤ���');
define('_MD_ORDER_SEND','ͽ��򿽤�����');
define('_MD_ORDER_CONF','��ǧ�ڡ�����');

define('_MD_EVENT_NONE','�Ǻ���Υ��٥�Ȱ���Ϥ���ޤ���');
define('_MD_BACK','���');
define('_MD_RESERVED','���Υ��٥�Ȥ�ͽ�󤷤Ƥ��ޤ�');
define('_MD_RESERV_NUM','����� %d��');
define('_MD_RESERV_REG','ͽ��� %d��');
define('_PRINT', '����');

define('_MD_NOITEM_ERR','ɬ�ܹ��ܤ����Ϥ�����ޤ���');
define('_MD_NUMITEM_ERR','���ͤ����Ϥ��Ƥ�������');
define('_MD_MAIL_ERR','�᡼�륢�ɥ쥹�ν񼰤��ǧ���Ƥ�������');
define('_MD_MAIL_CONF_ERR','��ǧ���ϤΥ᡼�륢�ɥ쥹�����פ��ޤ���');
define('_MD_SEND_ERR','�᡼�������˼��Ԥ��ޤ���');
define('_MD_DUP_ERR','���������ߥ᡼�륢�ɥ쥹�Ǵ���ͽ�󤬤���ޤ�');
define('_MD_DATE_ERR','�����������ϰϳ��Ǥ�');
define('_MD_DATEDELETE_ERR','ͽ�󤬤���ΤǺ������ߤ��ޤ���');
define('_MD_DUP_REGISTER','�᡼�����Τϴ�����Ͽ�ѤߤǤ�');
define('_MD_REGISTERED','�᡼�����Τ���Ͽ���ޤ���');

define('_MD_RESERV_ACCEPT','ͽ���ǧ�᡼����������ޤ�������ǧ�᡼�뤬�Ϥ��ʤ���硢ô���ԤޤǸ�Ϣ����������');
define('_MD_RESERV_STOP','���ߡ�ͽ����դ���ߤ���Ƥ��ޤ���');
define('_MD_RESERV_CONF','��������');
define('_MD_RESERV_ADMIN','ͽ�����');
define('_MD_RESERV_REGISTER','ͽ����Ͽ');

define("_MD_RESERV_ACTIVE","����դ��ޤ�����");
define("_MD_RESERV_REFUSE","�ϼ��դ����ޤ���");

define('_AM_MAILGOOD','����: %s');
define('_AM_SENDMAILNG','����: %s');

define('_MD_RESERV_NOTFOUND','�����ͽ�󤬤ʤ��������˼��ä���Ƥ��ޤ���');
define('_MD_RESERV_CANCEL','����ͽ�����ä��ޤ���');
define('_MD_RESERV_CANCELED','���٥��ͽ�����ä��ޤ���');
define('_MD_RESERV_NOCANCEL','�����ڤ���ͽ��μ��ä��ϹԤ��ޤ���');
define('_MD_RESERV_NOTIFY',"%s\n\nͽ��ԥ��ɥ쥹: %s\nͽ�󥤥٥��: %s\n  %s\n");
define('_MD_RESERV_FULL','ͽ��Ϳ���ã����������դ�λ���ޤ���');
define('_MD_RESERV_TOMATCH',' %d ��¿�᤮�ޤ� (�Ĥ� %d)');
define('_MD_RESERV_CLOSE','���դ�λ���ޤ���');
define('_MD_RESERV_NEEDLOGIN','���٥�Ȥ�ͽ��ˤ�<a href="'.XOOPS_URL.'/user.php">������</a>��ɬ�פǤ�');
define('_MD_RESERV_PLUGIN_FAIL','�����ξ�郎��­���Ƥ��ޤ�');
define('_MD_CANCEL_FAIL','���ä����������Ԥ��ޤ���');
define('_MD_CANCEL_SUBJ','ͽ���� - {EVENT_DATE} {EVENT_TITLE}');
define('_MD_NODATA','�ǡ���������ޤ���');
define('_MD_NOEVENT','���򤵤줿���٥�ȵ�����¸�ߤ��ޤ���');
define('_MD_SHOW_PREV','���Υ��٥��');
define('_MD_SHOW_NEXT','���Υ��٥��');

define('_MD_POSTERC','ô����');
define('_MD_POSTDATE','��Ͽ����');
define('_MD_STARTTIME','���ϻ���');
define('_MD_CLOSEDATE','ͽ�����ڻ���');
define('_MD_CLOSEBEFORE','ͽ��λ����');
define('_MD_CLOSEBEFORE_DESC','���ϤޤǤλ��֤�Ĺ���ǻ��ꤹ�� (��: 3����, 2����, 50ʬ)');
define('_MD_TIME_UNIT','����,����,ʬ');
define('_MD_TIME_REG','��(��)?,��(��)?,ʬ');
define('_MD_CALENDAR','����������');
define('_MD_CAL','������');
define('_MD_CAL_MONDAY_FIRST', false);
define('_MD_REFER','%d �ҥå�');
define('_MD_RESERV_LIST','���ü԰���');

define('_MD_NEED_UPGRADE','�⥸�塼��Υ��åץ��졼�ɽ�����Ԥ��ޤ�');

//%%%%%%	File Name receiept.php 	%%%%%
define("_MD_RESERV_EDIT","ͽ�������Խ�");
define("_MD_OPERATION","���");
define("_MD_STATUS","����");
define("_MD_RESERV_RETURN","���������");
define("_MD_RESERV_REC","ͽ�����ξܺ�");
define("_MD_RVID","����ID");
define("_MD_ORDER_COUNT","�������߿�");
define("_MD_PRINT_DATE","ɽ������");
define("_MD_SAVECHANGE","�ѹ�����¸");
define("_MD_RESERV_DEL","����ͽ���������");
define("_MD_DETAIL","�ܺ�");
define("_MD_RESERV_MSG_H","�����������å�����");
define("_MD_ACTIVATE","���վ�ǧ");
define("_MD_REFUSE","���յ���");
define("_MD_EXPORT_OUT","Excel����");
define('_MD_EXPORT_CHARSET', 'UTF-8');
define("_MD_INFO_MAIL","�᡼������");
define("_MD_SUMMARY","����");
define("_MD_SUM_ITEM","���׹���");
define("_MD_SUM","��");

//%%%%%%	File Name admin.php 	%%%%%
define('_MD_EDITARTICLE','���٥�ȵ������Խ�');
define('_MD_NEWTITLE','������Ͽ���٥��');
define('_MD_NEWSUB','������Ͽ���٥�� - {EVENT_DATE} {EVENT_TITLE}');
define('_MD_TITLE','ɽ��');
define('_MD_EVENT_DATE','���٥������');
define('_MD_EVENT_EXPIRE','�Ǻܽ�λ����');
define('_MD_EVENT_EXTENT','�����֤�����');
define('_MD_EVENT_CATEGORY','���ƥ���');
define('_MD_EDIT_EXTENT','���������Խ�');
define('_MD_EXTENT_REPEAT','���');
define('_MD_ADD_EXTENT','���������ɲ�');
define('_MD_ADD_EXTENT_DESC','�ɲä��볫������ YYYY-MM-DD HH:MM �����ǵ��� (ʣ���ϲ��ԤǶ��ڤ�)');
define('_MD_INTROTEXT','��ʸ');
define('_MD_EXTEXT','�ܺ���ʸ');
define('_MD_EVENT_STYLE','���Ϥ��Խ�����');
define('_MD_RESERV_SETTING','ͽ�����');
define('_MD_RESERV_DESC','ͽ����ս�����Ԥ�');
define('_MD_RESERV_STOPFULL','����ˤʤä���������');
define('_MD_RESERV_AUTO','��ư���� (ͽ��ǧ�򤷤ʤ�)');
define('_MD_RESERV_NOTIFYPOSTER','������᡼���ô���Ԥ����Τ���');
define('_MD_RESERV_UNIT','��');
define('_MD_RESERV_ITEM','�ɲù���');
define('_MD_RESERV_LAB','����̾');
define('_MD_RESERV_LABREQ','����̾�����Ϥ��Ƥ�������');
define('_MD_RESERV_REQ','ɬ�ܹ���');
define('_MD_RESERV_ADD','�ɲ�');
define('_MD_RESERV_OPTREQ','������ɬ�פǤ�');
define('_MD_RESERV_ITEM_DESC','<a href="language/japanese/help.html#form" target="help">�ɲù��ܤν񼰤ˤĤ���</a>');
define('_MD_RESERV_LABEL_DESC','ͽ��Ϳ��λ���Ϲ���̾��%s�פǹԤ��ޤ�');
define('_MD_OPTION_VARS','���ץ�����ѿ�');
define('_MD_OPTION_OTHERS','����¾');
define('_MD_RESERV_REDIRECT','ͽ�������ܤ��� URL');
define('_MD_RESERV_REDIRECT_DESC','�Ԥ����֤��ÿ��ǻ���Ǥ��� (��: "4;http://...")���ѿ�: {X_EID}, {X_SUB}, {X_RVID}');
define('_MD_APPROVE','�Ǻܾ�ǧ');
define('_MD_PREVIEW','�ץ�ӥ塼');
define('_MD_SAVE','��¸');
define('_MD_UPDATE','��������');
define('_MD_DBUPDATED','�ǡ����١����򹹿����ޤ���');
define('_MD_DBDELETED','���٥�Ȥ������ޤ���');

define('_MD_EVENT_DEL_DESC','���Υ��٥�Ȥ������ޤ���');
define('_MD_EVENT_DEL_ADMIN','���������ޤ᤹�٤ƤΥǡ����������ޤ���');

define('_MD_TIMEC','����');
// Localization Transrate Month name
global $ev_month;
$ev_month = array("Jan"=>"1��", "Feb"=>"2��", "Mar"=>"3��", "Apr"=>"4��",
		  "May"=>"5��", "Jun"=>"6��", "Jul"=>"7��", "Aug"=>"8��",
		  "Sep"=>"9��", "Oct"=>"10��", "Nov"=>"11��", "Dec"=>"12��");

define('_MD_RESERV_DEFAULT_ITEM',"̾��*,size=40\n����\n");
define('_MD_RESERV_DEFAULT_MEMBER',"");

// notification message
define('_MD_APPROVE_REQ','���Ƥ��ǧ���ƾ�ǧ��ԤäƤ���������');
//%%%%%%	File Name sendinfo.php 	%%%%%
define("_MD_INFO_TITLE","���Τ餻�᡼�������");
define("_MD_INFO_CONDITION","������");
define("_MD_INFO_NODATA","�ǡ���������ޤ���");
define("_MD_INFO_SELF","���Ƥ�ʬ���� (%s) �ˤ���������");
define("_MD_INFO_DEFAULT","-���Τ餻����ʸ-\n\n\nͽ�󥤥٥�Ȥξܺ�\n    {EVENT_URL}\n");
define("_MD_INFO_MAILOK","�᡼���������������ޤ���");
define("_MD_INFO_MAILNG","�᡼�����������Ԥ��ޤ���");
define("_MD_UPDATE_SUBJECT","���٥�Ȥι�������");
define("_MD_UPDATE_DEFAULT","������");

//%%%%%%	File Name print.php 	%%%%%

define('_MD_URLFOREVENT','���Υ��٥�ȵ������Ǻܤ���Ƥ���URL��');
// %s represents your site name
define('_MD_THISCOMESFROM','%s�ˤƹ���¿���Υ��٥�Ȱ�����ɤळ�Ȥ��Ǥ��ޤ�');

//%%%%%%	File Name mylist.php 	%%%%%
define('_MD_MYLIST','����ޤǤ�ͽ�󤷤����٥��');
define('_MD_CANCEL','ͽ����');
?>