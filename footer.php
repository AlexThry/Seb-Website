<?php wp_footer() ?>


<?php if (!is_front_page()) : ?>


<footer class="m-4 mt-6">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="<<?php echo site_url() ?>" class="flex items-center mb-4 sm:mb-0">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><?php echo bloginfo('name') ?></span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="<?php echo site_url('about') ?>" class="mr-4 hover:underline md:mr-6 ">À propos</a>
                </li>
                <li>
                    <a href="<?php echo site_url('contact') ?>" class="mr-4 hover:underline md:mr-6 ">Contact</a>
                </li>
                <li>
                    <a href="mailto:thierry.alexis.pro@gmail.com" class="mr-4 hover:underline md:mr-6 ">Créer un site</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <?php echo date('Y'); ?> <a href="<?php echo site_url() ?>" class="hover:underline"><?php echo bloginfo('name') ?>™</a>. All Rights Reserved. Site crée par <a class="hover:underline font-bold" href="mailto:thierry.alexis.pro@gmail.com">Alexis Thierry.</a></span>
    </div>
</footer>

<?php endif; ?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>