Symfony2 + Assetic Experiments
==============================

Work in progress, will add more details soon.



Using Compass Filter
==============================

Installing: http://compass-style.org/install/

gem update --system
gem install compass

After that run in your project root:

compass create web/ --force

Add compass filter in app/config.yml
----------------------------------------


assetic:
    debug:          %kernel.debug%
    use_controller: false
    filters:
        cssrewrite: ~
        sass: ~
        compass: ~
        closure: ~
        # closure:
        #     jar: %kernel.root_dir%/java/compiler.jar
        # yui_css:
        #     jar: %kernel.root_dir%/java/yuicompressor-2.4.2.jar



Twig:
----------------------------------------

{% stylesheets '@AcmeCompassBundle/Resources/sass/main.scss' filter='compass' debug=true output='*.css' %}
     <link href="{{ asset_url }}" type="text/css" rel="stylesheet" />
{% endstylesheets %}
