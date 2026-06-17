<!-- header -->
<header>
    
<div class="mb-4 md:mb-0 w-full mx-auto relative">

    <div class="px-4 pb-6 lg:px-0">
        <h1 class="text-4xl font-semibold text-gray-800 leading-tight">
        <?= $title ?? 'Blog' ?>
        </h1>
        <!-- <a 
        href="#"
        class="py-2 blog-primary-color inline-flex items-center justify-center mb-2"
        >
        Cryptocurrency
        </a> -->
    </div>

    <img src="<?= $headerImage ?>" class="w-full object-cover lg:rounded" style="height: 28em;"/>

    <div class="text-gray-400 italic mt-4">
        <?= $readTime . " minute read." ?>
    </div>
</div>

</header>
<!-- header ends here -->