<?php

/**
 * Instana SDK extension stubs
 *
 * Example:
 * <code>
 * <?php
 *     $tracer = new Instana\Tracer();
 *     $span = $tracer->createSpan('foo');
 *     $span->annotate('function', 'doSomething');
 *     try {
 *         doSomething();
 *     } catch (\Exception $e) {
 *         $tracer->logException($e);
 *         $span->markError();
 *     } finally {
 *        $span->stop();
 *     }
 *</code>
 *
 * @link https://docs.instana.io/ecosystem/php/#php-sdk
 * @package Instana
 */

namespace Instana;

use Exception;

if (false === extension_loaded('instana') && false === class_exists('Instana\Tracer')) {
    /**
     * Class Instana\Tracer
     *
     * @package Instana
     */
    class Tracer
    {
        /**
         * Tracer constructor.
         */
        public function __construct(){}

        /**
         * Creates a new intermediate SDK Span with the name set to $category
         *
         * @param string $category
         * @return Span
         */
        public function createSpan($category){
            return new Span();
        }

        /**
         * Returns a reference to the root Span
         *
         * @return Span
         */
        public static function getEntrySpan(){
            return new Span();
        }

        /**
         * Logs an exception
         *
         * @param \Exception $e
         * @return void
         */
        public function logException(\Exception $e){}

        /**
         * Sets the Service Name
         *
         * @param string $serviceName
         * return void
         */
        public static function setServiceName($serviceName){}
    }

    /**
     * Class Instana\Span
     *
     * An individual Span in a Trace
     *
     * @package Instana
     */
    class Span
    {
        /**
         * Span constructor.
         *
         * Creating Spans directly through this constructor will create orphaned Spans that won't show up in a trace.
         * Use <code>Tracer::createSpan()</code> instead.
         *
         * @see Tracer::createSpan()
         */
        public function __construct(){}

        /**
         * Annotates the Span with a key and a value
         *
         * Setting the same key multiple times will overwrite any previously set value.
         *
         * @param string $key
         * @param string|int $val
         * @throws InstanaRuntimeException when Span was already stopped
         * @throws InstanaRuntimeException when $key is not a string
         * @throws InstanaRuntimeException when $value is not a string or integer
         * @return void
         */
        public function annotate($key, $val){}

        /**
         * Marks the Span as erroneous
         *
         * @throws InstanaRuntimeException when Span was already stopped
         * @return void
         */
        public function markError(){}

        /**
         * Closes the Span
         *
         * @throws InstanaRuntimeException when Span was not created through Span::__construct
         * @return void
         */
        public function stop(){}
    }

    /**
     * Class InstanaRuntimeException
     *
     * @package Instana
     */
    class InstanaRuntimeException extends \Exception {}
}
