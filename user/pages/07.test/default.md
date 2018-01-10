---
title: test
visible: false
---

<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key=""
          data-description="Access for a year"
          data-amount="5000"
          data-locale="auto"></script>
</form>