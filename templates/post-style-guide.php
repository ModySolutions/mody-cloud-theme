<?php
/**
 * Template Name: Style Guide
 *
 * This template displays a visual style guide for the theme's core components.
 *
 * @package ModyCloud
 * @since 1.0.0
 */

get_header();

// Apply a filter to allow other plugins to modify the container classes.
$container_classes = apply_filters('mody_cloud_style_guide_container_classes', 'container mx-auto px-4 py-8');
?>

    <div id="primary" class="<?php echo esc_attr($container_classes); ?>">
        <main id="main" class="site-main">

            <h1 class="text-4xl font-bold mb-8"><?php echo __('Theme Style Guide', 'app'); ?></h1>
            <hr class="my-8">

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-4"><?php echo __('Headings', 'app'); ?></h2>
                <div class="space-y-4">
                    <h1 class="text-5xl font-extrabold"><?php echo __('Heading 1', 'app'); ?></h1>
                    <h2 class="text-4xl font-bold"><?php echo __('Heading 2', 'app'); ?></h2>
                    <h3 class="text-3xl font-semibold"><?php echo __('Heading 3', 'app'); ?></h3>
                    <h4 class="text-2xl font-medium"><?php echo __('Heading 4', 'app'); ?></h4>
                    <h5 class="text-xl font-normal"><?php echo __('Heading 5', 'app'); ?></h5>
                    <h6 class="text-lg font-light"><?php echo __('Heading 6', 'app'); ?></h6>
                </div>
            </section>

            <hr class="my-8">

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-4"><?php echo __('Paragraphs and Text', 'app'); ?></h2>
                <p class="text-base leading-relaxed mb-4">
                    <?php echo __('This is a standard paragraph. The theme is designed to work with the Gutenberg block editor, so your styles for `<p>` should be consistent with the color palette and typography defined in the `theme.json`.', 'app'); ?>
                </p>
                <blockquote class="border-l-4 border-mody-green pl-4 text-mody-grey italic my-6">
                    <?php echo __('"This is a block quote. It is used to highlight important text or to cite a source. The default font color is `mody-grey` according to the `theme.json`."', 'app'); ?>
                </blockquote>
                <p>
                    <?php echo __('Text can include elements such as', 'app'); ?> <strong><?php echo __('bold text', 'app'); ?></strong>, <em><?php echo __('italic text', 'app'); ?></em>, <a href="#" class="text-mody-green hover:underline"><?php echo __('hyperlinks', 'app'); ?></a>, <?php echo __('and', 'app'); ?> <code><?php echo __('inline code', 'app'); ?></code>.
                </p>
            </section>

            <hr class="my-8">

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-4"><?php echo __('Lists', 'app'); ?></h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-2xl font-medium mb-2"><?php echo __('Unordered List', 'app'); ?></h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li><?php echo __('List item 1', 'app'); ?></li>
                            <li><?php echo __('List item 2', 'app'); ?></li>
                            <li><?php echo __('List item 3', 'app'); ?></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-2xl font-medium mb-2"><?php echo __('Ordered List', 'app'); ?></h3>
                        <ol class="list-decimal list-inside space-y-2">
                            <li><?php echo __('First item', 'app'); ?></li>
                            <li><?php echo __('Second item', 'app'); ?></li>
                            <li><?php echo __('Third item', 'app'); ?></li>
                        </ol>
                    </div>
                </div>
            </section>

            <hr class="my-8">

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-4"><?php echo __('Buttons', 'app'); ?></h2>
                <div class="flex items-center space-x-4">
                    <button class="bg-mody-green text-mody-light-grey py-2 px-4 rounded-md hover:bg-opacity-80 transition-colors">
                        <?php echo __('Primary Button', 'app'); ?>
                    </button>
                    <button class="bg-mody-grey text-white py-2 px-4 rounded-md hover:bg-opacity-80 transition-colors">
                        <?php echo __('Secondary Button', 'app'); ?>
                    </button>
                </div>
            </section>

            <hr class="my-8">

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-4"><?php echo __('Form Elements', 'app'); ?></h2>
                <form class="space-y-4">
                    <div>
                        <label for="text-input" class="block text-sm font-medium text-mody-text"><?php echo __('Text Field', 'app'); ?></label>
                        <input type="text" id="text-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-mody-green focus:ring-mody-green">
                    </div>
                    <div>
                        <label for="textarea" class="block text-sm font-medium text-mody-text"><?php echo __('Text Area', 'app'); ?></label>
                        <textarea id="textarea" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-mody-green focus:ring-mody-green"></textarea>
                    </div>
                    <div>
                        <label for="select-menu" class="block text-sm font-medium text-mody-text"><?php echo __('Select', 'app'); ?></label>
                        <select id="select-menu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-mody-green focus:ring-mody-green">
                            <option><?php echo __('Option 1', 'app'); ?></option>
                            <option><?php echo __('Option 2', 'app'); ?></option>
                            <option><?php echo __('Option 3', 'app'); ?></option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <input id="checkbox" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-mody-green focus:ring-mody-green">
                        <label for="checkbox" class="ml-2 block text-sm text-mody-text"><?php echo __('Checkbox', 'app'); ?></label>
                    </div>
                </form>
            </section>

            <hr class="my-8">

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-4"><?php echo __('Tables', 'app'); ?></h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-mody-light-grey">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-mody-grey uppercase tracking-wider"><?php echo __('Column 1', 'app'); ?></th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-mody-grey uppercase tracking-wider"><?php echo __('Column 2', 'app'); ?></th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-mody-grey uppercase tracking-wider"><?php echo __('Column 3', 'app'); ?></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo __('Data 1A', 'app'); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo __('Data 1B', 'app'); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo __('Data 1C', 'app'); ?></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo __('Data 2A', 'app'); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo __('Data 2B', 'app'); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo __('Data 2C', 'app'); ?></td>
                    </tr>
                    </tbody>
                </table>
            </section>

        </main>
    </div>

<?php
get_footer();