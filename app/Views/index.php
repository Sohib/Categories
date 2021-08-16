<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories App</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <?php echo link_tag('css/main.css'); ?>

</head>
<body>

<header>

    <h1>Categories App</h1>

</header>

<!-- CONTENT -->

<section>
    <?php if (!empty($categories) && is_array($categories)) : ?>
        <h3>Select a Category</h3>
        <div id="error_message">
            <p>Error while querying for categories.</p>
        </div>
        <div id="select_list">
            <select id="main_select" onchange="fetchCategory(this)">
                <?php foreach ($categories as $category): ?>
                    <option name="category_id"
                            value="<?= esc($category['id']) ?>"><?= esc($category['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php else : ?>

        <h3>There is No Categories</h3>
        <p>Please Add Categories in the database to test the program</p>

    <?php endif ?>


</section>


<footer>


</footer>

<!-- SCRIPTS -->
<script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
</script>
<?php echo script_tag('js/helpers.js'); ?>
<?php echo script_tag('js/categories.js'); ?>

</body>
</html>
