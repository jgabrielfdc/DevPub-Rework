<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9041d2e855e17d34a6bc91112699d413
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Bridges\\MailDI\\MailExtension' => __DIR__ . '/..' . '/nette/mail/src/Bridges/MailDI/MailExtension.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\HtmlStringable' => __DIR__ . '/..' . '/nette/utils/src/HtmlStringable.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Localization\\Translator' => __DIR__ . '/..' . '/nette/utils/src/Translator.php',
        'Nette\\Mail\\DkimSigner' => __DIR__ . '/..' . '/nette/mail/src/Mail/DkimSigner.php',
        'Nette\\Mail\\FallbackMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/FallbackMailer.php',
        'Nette\\Mail\\FallbackMailerException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\IMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/Mailer.php',
        'Nette\\Mail\\Mailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/Mailer.php',
        'Nette\\Mail\\Message' => __DIR__ . '/..' . '/nette/mail/src/Mail/Message.php',
        'Nette\\Mail\\MimePart' => __DIR__ . '/..' . '/nette/mail/src/Mail/MimePart.php',
        'Nette\\Mail\\SendException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\SendmailMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/SendmailMailer.php',
        'Nette\\Mail\\SignException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\Signer' => __DIR__ . '/..' . '/nette/mail/src/Mail/Signer.php',
        'Nette\\Mail\\SmtpException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\SmtpMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/SmtpMailer.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileInfo' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileInfo.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Finder' => __DIR__ . '/..' . '/nette/utils/src/Utils/Finder.php',
        'Nette\\Utils\\Floats' => __DIR__ . '/..' . '/nette/utils/src/Utils/Floats.php',
        'Nette\\Utils\\Helpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/Helpers.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageColor' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageColor.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ImageType' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageType.php',
        'Nette\\Utils\\Iterables' => __DIR__ . '/..' . '/nette/utils/src/Utils/Iterables.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\ReflectionMethod' => __DIR__ . '/..' . '/nette/utils/src/Utils/ReflectionMethod.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\Type' => __DIR__ . '/..' . '/nette/utils/src/Utils/Type.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9041d2e855e17d34a6bc91112699d413::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9041d2e855e17d34a6bc91112699d413::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9041d2e855e17d34a6bc91112699d413::$classMap;

        }, null, ClassLoader::class);
    }
}
