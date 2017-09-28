<?php
class jregistry extends \Joomla\Registry\Registry {}
abstract class jregistryformat extends \Joomla\Registry\AbstractRegistryFormat {}
class jregistryformatini extends \Joomla\Registry\Format\Ini {}
class jregistryformatjson extends \Joomla\Registry\Format\Json {}
class jregistryformatphp extends \Joomla\Registry\Format\Php {}
class jregistryformatxml extends \Joomla\Registry\Format\Xml {}
class jstringinflector extends \Joomla\String\Inflector {}
abstract class jstringnormalise extends \Joomla\String\Normalise {}
class jdata extends \Joomla\Data\DataObject {}
class jdataset extends \Joomla\Data\DataSet {}
interface jdatadumpable extends \Joomla\Data\DumpableInterface {}
class japplicationadministrator extends \Joomla\CMS\Application\AdministratorApplication {}
class japplicationhelper extends \Joomla\CMS\Application\ApplicationHelper {}
abstract class japplicationbase extends \Joomla\CMS\Application\BaseApplication {}
class japplicationcli extends \Joomla\CMS\Application\CliApplication {}
class japplicationcms extends \Joomla\CMS\Application\CMSApplication {}
class japplicationdaemon extends \Joomla\CMS\Application\DaemonApplication {}
class japplicationsite extends \Joomla\CMS\Application\SiteApplication {}
class japplicationweb extends \Joomla\CMS\Application\WebApplication {}
class japplicationwebclient extends \Joomla\Application\Web\WebClient {}
class jdaemon extends \Joomla\CMS\Application\DaemonApplication {}
class jcli extends \Joomla\CMS\Application\CliApplication {}
class jweb extends \Joomla\CMS\Application\WebApplication {}
class jwebclient extends \Joomla\Application\Web\WebClient {}
abstract class jmodeladmin extends \Joomla\CMS\MVC\Model\AdminModel {}
abstract class jmodelform extends \Joomla\CMS\MVC\Model\FormModel {}
abstract class jmodelitem extends \Joomla\CMS\MVC\Model\ItemModel {}
class jmodellist extends \Joomla\CMS\MVC\Model\ListModel {}
abstract class jmodellegacy extends \Joomla\CMS\MVC\Model\BaseDatabaseModel {}
class jviewcategories extends \Joomla\CMS\MVC\View\CategoriesView {}
class jviewcategory extends \Joomla\CMS\MVC\View\CategoryView {}
class jviewcategoryfeed extends \Joomla\CMS\MVC\View\CategoryFeedView {}
class jviewlegacy extends \Joomla\CMS\MVC\View\HtmlView {}
class jcontrolleradmin extends \Joomla\CMS\MVC\Controller\AdminController {}
class jcontrollerlegacy extends \Joomla\CMS\MVC\Controller\BaseController {}
class jcontrollerform extends \Joomla\CMS\MVC\Controller\FormController {}
interface jtableinterface extends \Joomla\CMS\Table\TableInterface {}
abstract class jtable extends \Joomla\CMS\Table\Table {}
class jtablenested extends \Joomla\CMS\Table\Nested {}
class jtableasset extends \Joomla\CMS\Table\Asset {}
class jtableextension extends \Joomla\CMS\Table\Extension {}
class jtablelanguage extends \Joomla\CMS\Table\Language {}
class jtableupdate extends \Joomla\CMS\Table\Update {}
class jtableupdatesite extends \Joomla\CMS\Table\UpdateSite {}
class jtableuser extends \Joomla\CMS\Table\User {}
class jtableusergroup extends \Joomla\CMS\Table\Usergroup {}
class jtableviewlevel extends \Joomla\CMS\Table\ViewLevel {}
class jtablecontenthistory extends \Joomla\CMS\Table\ContentHistory {}
class jtablecontenttype extends \Joomla\CMS\Table\ContentType {}
class jtablecorecontent extends \Joomla\CMS\Table\CoreContent {}
class jtableucm extends \Joomla\CMS\Table\Ucm {}
class jtablecategory extends \Joomla\CMS\Table\Category {}
class jtablecontent extends \Joomla\CMS\Table\Content {}
class jtablemenu extends \Joomla\CMS\Table\Menu {}
class jtablemenutype extends \Joomla\CMS\Table\MenuType {}
class jtablemodule extends \Joomla\CMS\Table\Module {}
abstract class jtableobserver extends \Joomla\CMS\Table\Observer\AbstractObserver {}
class jtableobservercontenthistory extends \Joomla\CMS\Table\Observer\ContentHistory {}
class jtableobservertags extends \Joomla\CMS\Table\Observer\Tags {}
class jaccess extends \Joomla\CMS\Access\Access {}
class jaccessrule extends \Joomla\CMS\Access\Rule {}
class jaccessrules extends \Joomla\CMS\Access\Rules {}
class jaccesswrapperaccess extends \Joomla\CMS\Access\Wrapper\Access {}
class jaccessexceptionnotallowed extends \Joomla\CMS\Access\Exception\NotAllowed {}
class jrule extends \Joomla\CMS\Access\Rule {}
class jrules extends \Joomla\CMS\Access\Rules {}
class jhelp extends \Joomla\CMS\Help\Help {}
class jcaptcha extends \Joomla\CMS\Captcha\Captcha {}
class jlanguageassociations extends \Joomla\CMS\Language\Associations {}
class jlanguage extends \Joomla\CMS\Language\Language {}
class jlanguagehelper extends \Joomla\CMS\Language\LanguageHelper {}
abstract class jlanguagestemmer extends \Joomla\CMS\Language\LanguageStemmer {}
class jlanguagemultilang extends \Joomla\CMS\Language\Multilanguage {}
class jtext extends \Joomla\CMS\Language\Text {}
class jlanguagetransliterate extends \Joomla\CMS\Language\Transliterate {}
class jlanguagestemmerporteren extends \Joomla\CMS\Language\Stemmer\Porteren {}
class jlanguagewrappertext extends \Joomla\CMS\Language\Wrapper\JTextWrapper {}
class jlanguagewrapperhelper extends \Joomla\CMS\Language\Wrapper\LanguageHelperWrapper {}
class jlanguagewrappertransliterate extends \Joomla\CMS\Language\Wrapper\TransliterateWrapper {}
class jcomponenthelper extends \Joomla\CMS\Component\ComponentHelper {}
class jcomponentrecord extends \Joomla\CMS\Component\ComponentRecord {}
class jcomponentexceptionmissing extends \Joomla\CMS\Component\Exception\MissingComponentException {}
abstract class jcomponentrouterbase extends \Joomla\CMS\Component\Router\RouterBase {}
interface jcomponentrouterinterface extends \Joomla\CMS\Component\Router\RouterInterface {}
class jcomponentrouterlegacy extends \Joomla\CMS\Component\Router\RouterLegacy {}
abstract class jcomponentrouterview extends \Joomla\CMS\Component\Router\RouterView {}
class jcomponentrouterviewconfiguration extends \Joomla\CMS\Component\Router\RouterViewConfiguration {}
class jcomponentrouterrulesmenu extends \Joomla\CMS\Component\Router\Rules\MenuRules {}
class jcomponentrouterrulesnomenu extends \Joomla\CMS\Component\Router\Rules\NomenuRules {}
interface jcomponentrouterrulesinterface extends \Joomla\CMS\Component\Router\Rules\RulesInterface {}
class jcomponentrouterrulesstandard extends \Joomla\CMS\Component\Router\Rules\StandardRules {}
class jeditor extends \Joomla\CMS\Editor\Editor {}
class jerrorpage extends \Joomla\CMS\Exception\ExceptionHandler {}
abstract class jauthenticationhelper extends \Joomla\CMS\Helper\AuthenticationHelper {}
class jhelper extends \Joomla\CMS\Helper\CMSHelper {}
class jhelpercontent extends \Joomla\CMS\Helper\ContentHelper {}
class jhelpercontenthistory extends \Joomla\CMS\Helper\ContentHistoryHelper {}
class jlibraryhelper extends \Joomla\CMS\Helper\LibraryHelper {}
class jhelpermedia extends \Joomla\CMS\Helper\MediaHelper {}
abstract class jmodulehelper extends \Joomla\CMS\Helper\ModuleHelper {}
class jhelperroute extends \Joomla\CMS\Helper\RouteHelper {}
class jsearchhelper extends \Joomla\CMS\Helper\SearchHelper {}
class jhelpertags extends \Joomla\CMS\Helper\TagsHelper {}
class jhelperusergroups extends \Joomla\CMS\Helper\UserGroupsHelper {}
class jlayoutbase extends \Joomla\CMS\Layout\BaseLayout {}
class jlayoutfile extends \Joomla\CMS\Layout\FileLayout {}
class jlayouthelper extends \Joomla\CMS\Layout\LayoutHelper {}
interface jlayout extends \Joomla\CMS\Layout\LayoutInterface {}
class jresponsejson extends \Joomla\CMS\Response\JsonResponse {}
abstract class jplugin extends \Joomla\CMS\Plugin\CMSPlugin {}
abstract class jpluginhelper extends \Joomla\CMS\Plugin\PluginHelper {}
class jmenu extends \Joomla\CMS\Menu\AbstractMenu {}
class jmenuadministrator extends \Joomla\CMS\Menu\AdministratorMenu {}
class jmenuitem extends \Joomla\CMS\Menu\MenuItem {}
class jmenusite extends \Joomla\CMS\Menu\SiteMenu {}
class jpagination extends \Joomla\CMS\Pagination\Pagination {}
class jpaginationobject extends \Joomla\CMS\Pagination\PaginationObject {}
class jpathway extends \Joomla\CMS\Pathway\Pathway {}
class jpathwaysite extends \Joomla\CMS\Pathway\SitePathway {}
abstract class jschemachangeitem extends \Joomla\CMS\Schema\ChangeItem {}
class jschemachangeset extends \Joomla\CMS\Schema\ChangeSet {}
class jschemachangeitemmysql extends \Joomla\CMS\Schema\ChangeItem\MysqlChangeItem {}
class jschemachangeitempostgresql extends \Joomla\CMS\Schema\ChangeItem\PostgresqlChangeItem {}
class jschemachangeitemsqlsrv extends \Joomla\CMS\Schema\ChangeItem\SqlsrvChangeItem {}
interface jucm extends \Joomla\CMS\UCM\UCM {}
class jucmbase extends \Joomla\CMS\UCM\UCMBase {}
class jucmcontent extends \Joomla\CMS\UCM\UCMContent {}
class jucmtype extends \Joomla\CMS\UCM\UCMType {}
class jtoolbar extends \Joomla\CMS\Toolbar\Toolbar {}
abstract class jtoolbarbutton extends \Joomla\CMS\Toolbar\ToolbarButton {}
class jtoolbarbuttonconfirm extends \Joomla\CMS\Toolbar\Button\ConfirmButton {}
class jtoolbarbuttoncustom extends \Joomla\CMS\Toolbar\Button\CustomButton {}
class jtoolbarbuttonhelp extends \Joomla\CMS\Toolbar\Button\HelpButton {}
class jtoolbarbuttonlink extends \Joomla\CMS\Toolbar\Button\LinkButton {}
class jtoolbarbuttonpopup extends \Joomla\CMS\Toolbar\Button\PopupButton {}
class jtoolbarbuttonseparator extends \Joomla\CMS\Toolbar\Button\SeparatorButton {}
class jtoolbarbuttonslider extends \Joomla\CMS\Toolbar\Button\SliderButton {}
class jtoolbarbuttonstandard extends \Joomla\CMS\Toolbar\Button\StandardButton {}
abstract class jbutton extends \Joomla\CMS\Toolbar\ToolbarButton {}
class jversion extends \Joomla\CMS\Version {}
class jauthentication extends \Joomla\CMS\Authentication\Authentication {}
class jauthenticationresponse extends \Joomla\CMS\Authentication\AuthenticationResponse {}
class jbrowser extends \Joomla\CMS\Environment\Browser {}
interface jassociationextensioninterface extends \Joomla\CMS\Association\AssociationExtensionInterface {}
abstract class jassociationextensionhelper extends \Joomla\CMS\Association\AssociationExtensionHelper {}
class jdocument extends \Joomla\CMS\Document\Document {}
class jdocumenterror extends \Joomla\CMS\Document\ErrorDocument {}
class jdocumentfeed extends \Joomla\CMS\Document\FeedDocument {}
class jdocumenthtml extends \Joomla\CMS\Document\HtmlDocument {}
class jdocumentimage extends \Joomla\CMS\Document\ImageDocument {}
class jdocumentjson extends \Joomla\CMS\Document\JsonDocument {}
class jdocumentopensearch extends \Joomla\CMS\Document\OpensearchDocument {}
class jdocumentraw extends \Joomla\CMS\Document\RawDocument {}
class jdocumentrenderer extends \Joomla\CMS\Document\DocumentRenderer {}
class jdocumentxml extends \Joomla\CMS\Document\XmlDocument {}
class jdocumentrendererfeedatom extends \Joomla\CMS\Document\Renderer\Feed\AtomRenderer {}
class jdocumentrendererfeedrss extends \Joomla\CMS\Document\Renderer\Feed\RssRenderer {}
class jdocumentrendererhtmlcomponent extends \Joomla\CMS\Document\Renderer\Html\ComponentRenderer {}
class jdocumentrendererhtmlhead extends \Joomla\CMS\Document\Renderer\Html\HeadRenderer {}
class jdocumentrendererhtmlmessage extends \Joomla\CMS\Document\Renderer\Html\MessageRenderer {}
class jdocumentrendererhtmlmodule extends \Joomla\CMS\Document\Renderer\Html\ModuleRenderer {}
class jdocumentrendererhtmlmodules extends \Joomla\CMS\Document\Renderer\Html\ModulesRenderer {}
class jdocumentrendereratom extends \Joomla\CMS\Document\Renderer\Feed\AtomRenderer {}
class jdocumentrendererrss extends \Joomla\CMS\Document\Renderer\Feed\RssRenderer {}
class jdocumentrenderercomponent extends \Joomla\CMS\Document\Renderer\Html\ComponentRenderer {}
class jdocumentrendererhead extends \Joomla\CMS\Document\Renderer\Html\HeadRenderer {}
class jdocumentrenderermessage extends \Joomla\CMS\Document\Renderer\Html\MessageRenderer {}
class jdocumentrenderermodule extends \Joomla\CMS\Document\Renderer\Html\ModuleRenderer {}
class jdocumentrenderermodules extends \Joomla\CMS\Document\Renderer\Html\ModulesRenderer {}
class jfeedenclosure extends \Joomla\CMS\Document\Feed\FeedEnclosure {}
class jfeedimage extends \Joomla\CMS\Document\Feed\FeedImage {}
class jfeeditem extends \Joomla\CMS\Document\Feed\FeedItem {}
class jopensearchimage extends \Joomla\CMS\Document\Opensearch\OpensearchImage {}
class jopensearchurl extends \Joomla\CMS\Document\Opensearch\OpensearchUrl {}
class jfilterinput extends \Joomla\CMS\Filter\InputFilter {}
class jfilteroutput extends \Joomla\CMS\Filter\OutputFilter {}
class jfilterwrapperoutput extends \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper {}
class jhttp extends \Joomla\CMS\Http\Http {}
class jhttpfactory extends \Joomla\CMS\Http\HttpFactory {}
class jhttpresponse extends \Joomla\CMS\Http\Response {}
interface jhttptransport extends \Joomla\CMS\Http\TransportInterface {}
class jhttptransportcurl extends \Joomla\CMS\Http\Transport\CurlTransport {}
class jhttptransportsocket extends \Joomla\CMS\Http\Transport\SocketTransport {}
class jhttptransportstream extends \Joomla\CMS\Http\Transport\StreamTransport {}
class jhttpwrapperfactory extends \Joomla\CMS\Http\Wrapper\FactoryWrapper {}
class jinstaller extends \Joomla\CMS\Installer\Installer {}
abstract class jinstalleradapter extends \Joomla\CMS\Installer\InstallerAdapter {}
class jinstallerextension extends \Joomla\CMS\Installer\InstallerExtension {}
class jextension extends \Joomla\CMS\Installer\InstallerExtension {}
abstract class jinstallerhelper extends \Joomla\CMS\Installer\InstallerHelper {}
class jinstallerscript extends \Joomla\CMS\Installer\InstallerScript {}
abstract class jinstallermanifest extends \Joomla\CMS\Installer\Manifest {}
class jinstalleradaptercomponent extends \Joomla\CMS\Installer\Adapter\ComponentAdapter {}
class jinstallercomponent extends \Joomla\CMS\Installer\Adapter\ComponentAdapter {}
class jinstalleradapterfile extends \Joomla\CMS\Installer\Adapter\FileAdapter {}
class jinstallerfile extends \Joomla\CMS\Installer\Adapter\FileAdapter {}
class jinstalleradapterlanguage extends \Joomla\CMS\Installer\Adapter\LanguageAdapter {}
class jinstallerlanguage extends \Joomla\CMS\Installer\Adapter\LanguageAdapter {}
class jinstalleradapterlibrary extends \Joomla\CMS\Installer\Adapter\LibraryAdapter {}
class jinstallerlibrary extends \Joomla\CMS\Installer\Adapter\LibraryAdapter {}
class jinstalleradaptermodule extends \Joomla\CMS\Installer\Adapter\ModuleAdapter {}
class jinstallermodule extends \Joomla\CMS\Installer\Adapter\ModuleAdapter {}
class jinstalleradapterpackage extends \Joomla\CMS\Installer\Adapter\PackageAdapter {}
class jinstallerpackage extends \Joomla\CMS\Installer\Adapter\PackageAdapter {}
class jinstalleradapterplugin extends \Joomla\CMS\Installer\Adapter\PluginAdapter {}
class jinstallerplugin extends \Joomla\CMS\Installer\Adapter\PluginAdapter {}
class jinstalleradaptertemplate extends \Joomla\CMS\Installer\Adapter\TemplateAdapter {}
class jinstallertemplate extends \Joomla\CMS\Installer\Adapter\TemplateAdapter {}
class jinstallermanifestlibrary extends \Joomla\CMS\Installer\Manifest\LibraryManifest {}
class jinstallermanifestpackage extends \Joomla\CMS\Installer\Manifest\PackageManifest {}
class jrouteradministrator extends \Joomla\CMS\Router\AdministratorRouter {}
class jroute extends \Joomla\CMS\Router\Route {}
class jrouter extends \Joomla\CMS\Router\Router {}
class jroutersite extends \Joomla\CMS\Router\SiteRouter {}
class jcategories extends \Joomla\CMS\Categories\Categories {}
class jcategorynode extends \Joomla\CMS\Categories\CategoryNode {}
class jdate extends \Joomla\CMS\Date\Date {}
class jlog extends \Joomla\CMS\Log\Log {}
class jlogentry extends \Joomla\CMS\Log\LogEntry {}
abstract class jloglogger extends \Joomla\CMS\Log\Logger {}
abstract class jlogger extends \Joomla\CMS\Log\Logger {}
class jlogloggercallback extends \Joomla\CMS\Log\Logger\CallbackLogger {}
class jlogloggerdatabase extends \Joomla\CMS\Log\Logger\DatabaseLogger {}
class jlogloggerecho extends \Joomla\CMS\Log\Logger\EchoLogger {}
class jlogloggerformattedtext extends \Joomla\CMS\Log\Logger\FormattedtextLogger {}
class jlogloggermessagequeue extends \Joomla\CMS\Log\Logger\MessagequeueLogger {}
class jlogloggersyslog extends \Joomla\CMS\Log\Logger\SyslogLogger {}
class jlogloggerw3c extends \Joomla\CMS\Log\Logger\W3cLogger {}
class jprofiler extends \Joomla\CMS\Profiler\Profiler {}
class juri extends \Joomla\CMS\Uri\Uri {}
class jcache extends \Joomla\CMS\Cache\Cache {}
class jcachecontroller extends \Joomla\CMS\Cache\CacheController {}
class jcachestorage extends \Joomla\CMS\Cache\CacheStorage {}
class jcachecontrollercallback extends \Joomla\CMS\Cache\Controller\CallbackController {}
class jcachecontrolleroutput extends \Joomla\CMS\Cache\Controller\OutputController {}
class jcachecontrollerpage extends \Joomla\CMS\Cache\Controller\PageController {}
class jcachecontrollerview extends \Joomla\CMS\Cache\Controller\ViewController {}
class jcachestorageapc extends \Joomla\CMS\Cache\Storage\ApcStorage {}
class jcachestorageapcu extends \Joomla\CMS\Cache\Storage\ApcuStorage {}
class jcachestoragehelper extends \Joomla\CMS\Cache\Storage\CacheStorageHelper {}
class jcachestoragecachelite extends \Joomla\CMS\Cache\Storage\CacheliteStorage {}
class jcachestoragefile extends \Joomla\CMS\Cache\Storage\FileStorage {}
class jcachestoragememcached extends \Joomla\CMS\Cache\Storage\MemcachedStorage {}
class jcachestoragememcache extends \Joomla\CMS\Cache\Storage\MemcacheStorage {}
class jcachestorageredis extends \Joomla\CMS\Cache\Storage\RedisStorage {}
class jcachestoragewincache extends \Joomla\CMS\Cache\Storage\WincacheStorage {}
class jcachestoragexcache extends \Joomla\CMS\Cache\Storage\XcacheStorage {}
interface jcacheexception extends \Joomla\CMS\Cache\Exception\CacheExceptionInterface {}
class jcacheexceptionconnecting extends \Joomla\CMS\Cache\Exception\CacheConnectingException {}
class jcacheexceptionunsupported extends \Joomla\CMS\Cache\Exception\UnsupportedCacheException {}
class jsession extends \Joomla\CMS\Session\Session {}
class jsessionexceptionunsupported extends \Joomla\CMS\Session\Exception\UnsupportedStorageException {}
class juser extends \Joomla\CMS\User\User {}
abstract class juserhelper extends \Joomla\CMS\User\UserHelper {}
class juserwrapperhelper extends \Joomla\CMS\User\UserWrapper {}
class jform extends \Joomla\CMS\Form\Form {}
abstract class jformfield extends \Joomla\CMS\Form\FormField {}
class jformhelper extends \Joomla\CMS\Form\FormHelper {}
class jformrule extends \Joomla\CMS\Form\FormRule {}
class jformwrapper extends \Joomla\CMS\Form\FormWrapper {}
class jformfieldauthor extends \Joomla\CMS\Form\Field\AuthorField {}
class jformfieldcaptcha extends \Joomla\CMS\Form\Field\CaptchaField {}
class jformfieldchromestyle extends \Joomla\CMS\Form\Field\ChromestyleField {}
class jformfieldcontenthistory extends \Joomla\CMS\Form\Field\ContenthistoryField {}
class jformfieldcontentlanguage extends \Joomla\CMS\Form\Field\ContentlanguageField {}
class jformfieldcontenttype extends \Joomla\CMS\Form\Field\ContenttypeField {}
class jformfieldeditor extends \Joomla\CMS\Form\Field\EditorField {}
class jformfieldfrontend_language extends \Joomla\CMS\Form\Field\FrontendlanguageField {}
class jformfieldheadertag extends \Joomla\CMS\Form\Field\HeadertagField {}
class jformfieldhelpsite extends \Joomla\CMS\Form\Field\HelpsiteField {}
class jformfieldlastvisitdaterange extends \Joomla\CMS\Form\Field\LastvisitdaterangeField {}
class jformfieldlimitbox extends \Joomla\CMS\Form\Field\LimitboxField {}
class jformfieldmedia extends \Joomla\CMS\Form\Field\MediaField {}
class jformfieldmenu extends \Joomla\CMS\Form\Field\MenuField {}
class jformfieldmenuitem extends \Joomla\CMS\Form\Field\MenuitemField {}
class jformfieldmoduleorder extends \Joomla\CMS\Form\Field\ModuleorderField {}
class jformfieldmoduleposition extends \Joomla\CMS\Form\Field\ModulepositionField {}
class jformfieldmoduletag extends \Joomla\CMS\Form\Field\ModuletagField {}
class jformfieldordering extends \Joomla\CMS\Form\Field\OrderingField {}
class jformfieldplugin_status extends \Joomla\CMS\Form\Field\PluginstatusField {}
class jformfieldredirect_status extends \Joomla\CMS\Form\Field\RedirectStatusField {}
class jformfieldregistrationdaterange extends \Joomla\CMS\Form\Field\RegistrationdaterangeField {}
class jformfieldstatus extends \Joomla\CMS\Form\Field\StatusField {}
class jformfieldtag extends \Joomla\CMS\Form\Field\TagField {}
class jformfieldtemplatestyle extends \Joomla\CMS\Form\Field\TemplatestyleField {}
class jformfielduseractive extends \Joomla\CMS\Form\Field\UseractiveField {}
class jformfieldusergrouplist extends \Joomla\CMS\Form\Field\UsergrouplistField {}
class jformfielduserstate extends \Joomla\CMS\Form\Field\UserstateField {}
class jformfielduser extends \Joomla\CMS\Form\Field\UserField {}
class jformruleboolean extends \Joomla\CMS\Form\Rule\BooleanRule {}
class jformrulecalendar extends \Joomla\CMS\Form\Rule\CalendarRule {}
class jformrulecaptcha extends \Joomla\CMS\Form\Rule\CaptchaRule {}
class jformrulecolor extends \Joomla\CMS\Form\Rule\ColorRule {}
class jformruleemail extends \Joomla\CMS\Form\Rule\EmailRule {}
class jformruleequals extends \Joomla\CMS\Form\Rule\EqualsRule {}
class jformrulenotequals extends \Joomla\CMS\Form\Rule\NotequalsRule {}
class jformrulenumber extends \Joomla\CMS\Form\Rule\NumberRule {}
class jformruleoptions extends \Joomla\CMS\Form\Rule\OptionsRule {}
class jformrulepassword extends \Joomla\CMS\Form\Rule\PasswordRule {}
class jformrulerules extends \Joomla\CMS\Form\Rule\RulesRule {}
class jformruletel extends \Joomla\CMS\Form\Rule\TelRule {}
class jformruleurl extends \Joomla\CMS\Form\Rule\UrlRule {}
class jformruleusername extends \Joomla\CMS\Form\Rule\UsernameRule {}
class jmicrodata extends \Joomla\CMS\Microdata\Microdata {}
abstract class jfactory extends \Joomla\CMS\Factory {}
class jmail extends \Joomla\CMS\Mail\Mail {}
abstract class jmailhelper extends \Joomla\CMS\Mail\MailHelper {}
class jmailwrapperhelper extends \Joomla\CMS\Mail\MailWrapper {}
class jclienthelper extends \Joomla\CMS\Client\ClientHelper {}
class jclientwrapperhelper extends \Joomla\CMS\Client\ClientWrapper {}
class jclientftp extends \Joomla\CMS\Client\FtpClient {}
class jftp extends \Joomla\CMS\Client\FtpClient {}
class jclientldap extends \Joomla\Ldap\LdapClient {}
class jldap extends \Joomla\Ldap\LdapClient {}
class jupdate extends \Joomla\CMS\Updater\Update {}
abstract class jupdateadapter extends \Joomla\CMS\Updater\UpdateAdapter {}
class jupdater extends \Joomla\CMS\Updater\Updater {}
class jupdatercollection extends \Joomla\CMS\Updater\Adapter\CollectionAdapter {}
class jupdaterextension extends \Joomla\CMS\Updater\Adapter\ExtensionAdapter {}
class jcrypt extends \Joomla\CMS\Crypt\Crypt {}
interface jcryptcipher extends \Joomla\CMS\Crypt\CipherInterface {}
class jcryptkey extends \Joomla\CMS\Crypt\Key {}
interface jcryptpassword extends \Joomla\CMS\Crypt\CryptPassword {}
class jcryptcipherblowfish extends \Joomla\CMS\Crypt\Cipher\BlowfishCipher {}
class jcryptciphercrypto extends \Joomla\CMS\Crypt\Cipher\CryptoCipher {}
abstract class jcryptciphermcrypt extends \Joomla\CMS\Crypt\Cipher\McryptCipher {}
class jcryptcipherrijndael256 extends \Joomla\CMS\Crypt\Cipher\Rijndael256Cipher {}
class jcryptciphersimple extends \Joomla\CMS\Crypt\Cipher\SimpleCipher {}
class jcryptcipher3des extends \Joomla\CMS\Crypt\Cipher\TripleDesCipher {}
class jcryptpasswordsimple extends \Joomla\CMS\Crypt\Password\SimpleCryptPassword {}
abstract class jstringpunycode extends \Joomla\CMS\String\PunycodeHelper {}
class jbuffer extends \Joomla\CMS\Utility\BufferStreamHandler {}
class jutility extends \Joomla\CMS\Utility\Utility {}
class jinputcli extends \Joomla\CMS\Input\Cli {}
class jinputcookie extends \Joomla\CMS\Input\Cookie {}
class jinputfiles extends \Joomla\CMS\Input\Files {}
class jinput extends \Joomla\CMS\Input\Input {}
class jinputjson extends \Joomla\CMS\Input\Json {}
class jfeed extends \Joomla\CMS\Feed\Feed {}
class jfeedentry extends \Joomla\CMS\Feed\FeedEntry {}
class jfeedfactory extends \Joomla\CMS\Feed\FeedFactory {}
class jfeedlink extends \Joomla\CMS\Feed\FeedLink {}
abstract class jfeedparser extends \Joomla\CMS\Feed\FeedParser {}
class jfeedperson extends \Joomla\CMS\Feed\FeedPerson {}
class jfeedparseratom extends \Joomla\CMS\Feed\Parser\AtomParser {}
interface jfeedparsernamespace extends \Joomla\CMS\Feed\Parser\NamespaceParserInterface {}
class jfeedparserrss extends \Joomla\CMS\Feed\Parser\RssParser {}
class jfeedparserrssitunes extends \Joomla\CMS\Feed\Parser\Rss\ItunesRssParser {}
class jfeedparserrssmedia extends \Joomla\CMS\Feed\Parser\Rss\MediaRssParser {}
class jimage extends \Joomla\CMS\Image\Image {}
abstract class jimagefilter extends \Joomla\CMS\Image\ImageFilter {}
class jimagefilterbackgroundfill extends \Joomla\Image\Filter\Backgroundfill {}
class jimagefilterbrightness extends \Joomla\Image\Filter\Brightness {}
class jimagefiltercontrast extends \Joomla\Image\Filter\Contrast {}
class jimagefilteredgedetect extends \Joomla\Image\Filter\Edgedetect {}
class jimagefilteremboss extends \Joomla\Image\Filter\Emboss {}
class jimagefilternegate extends \Joomla\Image\Filter\Negate {}
class jimagefiltersketchy extends \Joomla\Image\Filter\Sketchy {}
class jimagefiltersmooth extends \Joomla\Image\Filter\Smooth {}
class jobject extends \Joomla\CMS\Object\CMSObject {}
class jextensionhelper extends \Joomla\CMS\Extension\ExtensionHelper {}
abstract class jhtml extends \Joomla\CMS\HTML\HTMLHelper {}
class jadministrator extends JApplicationAdministrator {}
class jsite extends JApplicationSite {}
