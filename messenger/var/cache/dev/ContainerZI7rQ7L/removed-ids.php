<?php

namespace ContainerZI7rQ7L;

return [
    'Psr\\Cache\\CacheItemPoolInterface' => true,
    'Psr\\Container\\ContainerInterface $parameterBag' => true,
    'Psr\\EventDispatcher\\EventDispatcherInterface' => true,
    'Psr\\Log\\LoggerInterface' => true,
    'Symfony\\Component\\Config\\Loader\\LoaderInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ReverseContainer' => true,
    'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => true,
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => true,
    'Symfony\\Component\\Filesystem\\Filesystem' => true,
    'Symfony\\Component\\HttpFoundation\\Request' => true,
    'Symfony\\Component\\HttpFoundation\\RequestStack' => true,
    'Symfony\\Component\\HttpFoundation\\Response' => true,
    'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => true,
    'Symfony\\Component\\HttpFoundation\\UriSigner' => true,
    'Symfony\\Component\\HttpFoundation\\UrlHelper' => true,
    'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => true,
    'Symfony\\Component\\HttpKernel\\Fragment\\FragmentUriGeneratorInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpCache\\StoreInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => true,
    'Symfony\\Component\\HttpKernel\\KernelInterface' => true,
    'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyReadInfoExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyWriteInfoExtractorInterface' => true,
    'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => true,
    'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => true,
    'Symfony\\Component\\Routing\\RequestContext' => true,
    'Symfony\\Component\\Routing\\RequestContextAwareInterface' => true,
    'Symfony\\Component\\Routing\\RouterInterface' => true,
    'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => true,
    'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => true,
    'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => true,
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => true,
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => true,
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => true,
    'Symfony\\Component\\Serializer\\SerializerInterface' => true,
    'Symfony\\Component\\String\\Slugger\\SluggerInterface' => true,
    'Symfony\\Component\\TypeInfo\\TypeResolver\\TypeResolverInterface' => true,
    'Symfony\\Contracts\\Cache\\CacheInterface' => true,
    'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => true,
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => true,
    'argument_metadata_factory' => true,
    'argument_resolver' => true,
    'argument_resolver.backed_enum_resolver' => true,
    'argument_resolver.controller_locator' => true,
    'argument_resolver.datetime' => true,
    'argument_resolver.default' => true,
    'argument_resolver.query_parameter_value_resolver' => true,
    'argument_resolver.request' => true,
    'argument_resolver.request_attribute' => true,
    'argument_resolver.request_payload' => true,
    'argument_resolver.service' => true,
    'argument_resolver.session' => true,
    'argument_resolver.variadic' => true,
    'cache.adapter.apcu' => true,
    'cache.adapter.array' => true,
    'cache.adapter.doctrine_dbal' => true,
    'cache.adapter.filesystem' => true,
    'cache.adapter.memcached' => true,
    'cache.adapter.pdo' => true,
    'cache.adapter.psr6' => true,
    'cache.adapter.redis' => true,
    'cache.adapter.redis_tag_aware' => true,
    'cache.adapter.system' => true,
    'cache.app.taggable' => true,
    'cache.default_clearer' => true,
    'cache.default_doctrine_dbal_provider' => true,
    'cache.default_marshaller' => true,
    'cache.default_memcached_provider' => true,
    'cache.default_redis_provider' => true,
    'cache.early_expiration_handler' => true,
    'cache.property_access' => true,
    'cache.property_info' => true,
    'cache.serializer' => true,
    'cache.validator' => true,
    'cache_clearer' => true,
    'config.resource.self_checking_resource_checker' => true,
    'config_builder.warmer' => true,
    'config_cache_factory' => true,
    'console.command.about' => true,
    'console.command.assets_install' => true,
    'console.command.cache_clear' => true,
    'console.command.cache_pool_clear' => true,
    'console.command.cache_pool_delete' => true,
    'console.command.cache_pool_invalidate_tags' => true,
    'console.command.cache_pool_list' => true,
    'console.command.cache_pool_prune' => true,
    'console.command.cache_warmup' => true,
    'console.command.config_debug' => true,
    'console.command.config_dump_reference' => true,
    'console.command.container_debug' => true,
    'console.command.container_lint' => true,
    'console.command.debug_autowiring' => true,
    'console.command.event_dispatcher_debug' => true,
    'console.command.router_debug' => true,
    'console.command.router_match' => true,
    'console.command.secrets_decrypt_to_local' => true,
    'console.command.secrets_encrypt_from_local' => true,
    'console.command.secrets_generate_key' => true,
    'console.command.secrets_list' => true,
    'console.command.secrets_remove' => true,
    'console.command.secrets_reveal' => true,
    'console.command.secrets_set' => true,
    'console.command.serializer_debug' => true,
    'console.command.yaml_lint' => true,
    'console.error_listener' => true,
    'console.messenger.application' => true,
    'console.messenger.execute_command_handler' => true,
    'console.suggest_missing_package_subscriber' => true,
    'container.env' => true,
    'container.env_var_processor' => true,
    'container.getenv' => true,
    'controller.cache_attribute_listener' => true,
    'controller_resolver' => true,
    'debug.debug_handlers_listener' => true,
    'debug.file_link_formatter' => true,
    'dependency_injection.config.container_parameters_resource_checker' => true,
    'disallow_search_engine_index_response_listener' => true,
    'error_handler.error_renderer.html' => true,
    'error_handler.error_renderer.serializer' => true,
    'error_renderer' => true,
    'error_renderer.html' => true,
    'error_renderer.serializer' => true,
    'exception_listener' => true,
    'file_locator' => true,
    'filesystem' => true,
    'fragment.handler' => true,
    'fragment.renderer.inline' => true,
    'fragment.uri_generator' => true,
    'http_cache' => true,
    'http_cache.store' => true,
    'locale_aware_listener' => true,
    'locale_listener' => true,
    'logger' => true,
    'parameter_bag' => true,
    'property_accessor' => true,
    'property_info' => true,
    'property_info.php_doc_extractor' => true,
    'property_info.phpstan_extractor' => true,
    'property_info.reflection_extractor' => true,
    'property_info.serializer_extractor' => true,
    'response_listener' => true,
    'reverse_container' => true,
    'router.cache_warmer' => true,
    'router.default' => true,
    'router.request_context' => true,
    'router_listener' => true,
    'routing.loader.attribute' => true,
    'routing.loader.attribute.directory' => true,
    'routing.loader.attribute.file' => true,
    'routing.loader.container' => true,
    'routing.loader.directory' => true,
    'routing.loader.glob' => true,
    'routing.loader.php' => true,
    'routing.loader.psr4' => true,
    'routing.loader.xml' => true,
    'routing.loader.yml' => true,
    'routing.resolver' => true,
    'secrets.decryption_key' => true,
    'secrets.env_var_loader' => true,
    'secrets.local_vault' => true,
    'secrets.vault' => true,
    'serializer' => true,
    'serializer.denormalizer.array' => true,
    'serializer.denormalizer.unwrapping' => true,
    'serializer.encoder.csv' => true,
    'serializer.encoder.json' => true,
    'serializer.encoder.xml' => true,
    'serializer.encoder.yaml' => true,
    'serializer.mapping.cache.symfony' => true,
    'serializer.mapping.cache_warmer' => true,
    'serializer.mapping.chain_loader' => true,
    'serializer.mapping.class_discriminator_resolver' => true,
    'serializer.mapping.class_metadata_factory' => true,
    'serializer.name_converter.camel_case_to_snake_case' => true,
    'serializer.name_converter.metadata_aware' => true,
    'serializer.name_converter.metadata_aware.abstract' => true,
    'serializer.name_converter.snake_case_to_camel_case' => true,
    'serializer.normalizer.backed_enum' => true,
    'serializer.normalizer.constraint_violation_list' => true,
    'serializer.normalizer.data_uri' => true,
    'serializer.normalizer.dateinterval' => true,
    'serializer.normalizer.datetime' => true,
    'serializer.normalizer.datetimezone' => true,
    'serializer.normalizer.form_error' => true,
    'serializer.normalizer.json_serializable' => true,
    'serializer.normalizer.object' => true,
    'serializer.normalizer.problem' => true,
    'serializer.normalizer.property' => true,
    'serializer.normalizer.uid' => true,
    'serializer.property_accessor' => true,
    'slugger' => true,
    'type_info.resolver' => true,
    'type_info.resolver.reflection_parameter' => true,
    'type_info.resolver.reflection_parameter.phpdoc_aware' => true,
    'type_info.resolver.reflection_property' => true,
    'type_info.resolver.reflection_property.phpdoc_aware' => true,
    'type_info.resolver.reflection_return' => true,
    'type_info.resolver.reflection_return.phpdoc_aware' => true,
    'type_info.resolver.reflection_type' => true,
    'type_info.resolver.string' => true,
    'type_info.type_context_factory' => true,
    'uri_signer' => true,
    'url_helper' => true,
    'validate_request_listener' => true,
];
