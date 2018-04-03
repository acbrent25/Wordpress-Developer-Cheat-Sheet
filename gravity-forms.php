<?php

/**
 * Add Ability to Hide Gravity form fields.
 */
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

<style>
/* Gravity Form Placeholders
-------------------------------------------------- */

*::-webkit-input-placeholder {
color: #4a4a4a;
}
*:-moz-placeholder {
/* FF 4-18 */
color: #4a4a4a;
}
*::-moz-placeholder {
/* FF 19+ */
color: #4a4a4a;
}
*:-ms-input-placeholder {
/* IE 10+ */
color: #4a4a4a;
}
</style>
