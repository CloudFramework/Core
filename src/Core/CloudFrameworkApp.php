<?php
namespace CloudFramework\Core;

/**
 * Class CloudFramework
 * @package CloudFramework\Core
 */
class CloudFrameworkApp extends Singleton
{
    /**
     * @var string
     */
    private $app_name;

    /**
     * @var \CloudFramework\Core\ConfigLoader $config
     */
    protected $config;

    /**
     * @Autowired
     * @var \CloudFramework\Core\RequestParser $request
     */
    protected $request;

    public function __construct($name = 'CloudFramework', $configFile = '')
    {
        $this->app_name = $name;
        //$this->config = ConfigLoader::getInstance($configFile);
    }

    public function run()
    {
        //$this->debugText($this . "\n" . $this->config . "\n" . $this->request);
        echo "Hello";
    }
}
