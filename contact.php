<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */
?>
<?php get_header(); ?>
<h1>page template</h1>
<h1 style="color: red;">Contact Me</h1>
<p style="color: darkorange;">email:  k-dub@gmail.com</p>
<p style="color: darkorange;" >phone:  707 444 4444</p>

<!-- Contact Form -->
<div class="contact-form">
  <form action="action_page.php">

    <label for="fname" style="color: red">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname"  style="color: red">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country"  style="color: red">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject"  style="color: red">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
<!-- End of Contact Form -->

<svg id="visual" viewBox="0 0 1350 600" width="1350" height="600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="1350" height="600" fill="#FFFFFF"></rect><path d="M0 358L32.2 366.3C64.3 374.7 128.7 391.3 193 390.7C257.3 390 321.7 372 386 363.2C450.3 354.3 514.7 354.7 578.8 365.3C643 376 707 397 771.2 412.8C835.3 428.7 899.7 439.3 964 431.2C1028.3 423 1092.7 396 1157 388.8C1221.3 381.7 1285.7 394.3 1317.8 400.7L1350 407L1350 601L1317.8 601C1285.7 601 1221.3 601 1157 601C1092.7 601 1028.3 601 964 601C899.7 601 835.3 601 771.2 601C707 601 643 601 578.8 601C514.7 601 450.3 601 386 601C321.7 601 257.3 601 193 601C128.7 601 64.3 601 32.2 601L0 601Z" fill="#f36b38"></path><path d="M0 408L32.2 416.5C64.3 425 128.7 442 193 451.8C257.3 461.7 321.7 464.3 386 463.2C450.3 462 514.7 457 578.8 453.3C643 449.7 707 447.3 771.2 451.8C835.3 456.3 899.7 467.7 964 467.7C1028.3 467.7 1092.7 456.3 1157 449.3C1221.3 442.3 1285.7 439.7 1317.8 438.3L1350 437L1350 601L1317.8 601C1285.7 601 1221.3 601 1157 601C1092.7 601 1028.3 601 964 601C899.7 601 835.3 601 771.2 601C707 601 643 601 578.8 601C514.7 601 450.3 601 386 601C321.7 601 257.3 601 193 601C128.7 601 64.3 601 32.2 601L0 601Z" fill="#df5031"></path><path d="M0 531L32.2 519.5C64.3 508 128.7 485 193 478.3C257.3 471.7 321.7 481.3 386 489C450.3 496.7 514.7 502.3 578.8 502.5C643 502.7 707 497.3 771.2 492.5C835.3 487.7 899.7 483.3 964 484.5C1028.3 485.7 1092.7 492.3 1157 489.7C1221.3 487 1285.7 475 1317.8 469L1350 463L1350 601L1317.8 601C1285.7 601 1221.3 601 1157 601C1092.7 601 1028.3 601 964 601C899.7 601 835.3 601 771.2 601C707 601 643 601 578.8 601C514.7 601 450.3 601 386 601C321.7 601 257.3 601 193 601C128.7 601 64.3 601 32.2 601L0 601Z" fill="#ca332b"></path><path d="M0 509L32.2 512.2C64.3 515.3 128.7 521.7 193 525.3C257.3 529 321.7 530 386 532.2C450.3 534.3 514.7 537.7 578.8 535.5C643 533.3 707 525.7 771.2 524.7C835.3 523.7 899.7 529.3 964 534.7C1028.3 540 1092.7 545 1157 547.3C1221.3 549.7 1285.7 549.3 1317.8 549.2L1350 549L1350 601L1317.8 601C1285.7 601 1221.3 601 1157 601C1092.7 601 1028.3 601 964 601C899.7 601 835.3 601 771.2 601C707 601 643 601 578.8 601C514.7 601 450.3 601 386 601C321.7 601 257.3 601 193 601C128.7 601 64.3 601 32.2 601L0 601Z" fill="#b40525"></path></svg>
	