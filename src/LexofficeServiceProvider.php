<?php

namespace Codersgarden\PhpLexofficeApi;

use Illuminate\Support\ServiceProvider;

class LexofficeServiceProvider extends ServiceProvider
{
    public function register()
    {

        // Register the Contact class
        $this->app->singleton('contact', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeContactManager();
        });

        $this->app->singleton('lexoffice-article', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeArticleManager();
        });

        $this->app->singleton('lexoffice-country', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeCountryManager();
        });

        $this->app->singleton('lexoffice-credit-note', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeCreditNoteManager();
        });

        $this->app->singleton('lexoffice-delivery-note', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeDeliveryNotesManager();
        });

        $this->app->singleton('lexoffice-file', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeFileManager();
        });

        $this->app->singleton('lexoffice-invoice', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeInvoiceManager();
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeOrderConfirmationManager();
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeProfileManager(); 
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficePaymentManager(); 
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficePaymentConditionManager(); 
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeQuotationManager(); 
        });
 
        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeVoucherListManager(); 
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeVoucherManager(); 
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeDunningManager();  
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeDownPaymentInvoiceManager(); 
        });
       
        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeEventSubscriptionManager();
        });
       
        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficePostingCategorieManager();  
        });


        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficePrintLayoutManager(); 
        });

        $this->app->singleton('lexoffice-order-confirmation', function ($app) {
            return new \Codersgarden\PhpLexofficeApi\LexofficeRecurringManager(); 
        });
        
       
        
        $this->mergeConfigFrom(__DIR__ . '/../config/lexoffice.php', 'lexoffice');
    }

    public function boot()
    {
        // Publish the config file
        $this->publishes([
            __DIR__ . '/../config/lexoffice.php' => config_path('lexoffice.php'),
        ], 'config');
    }
}
