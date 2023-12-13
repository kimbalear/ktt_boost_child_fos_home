<?php
require_once(__DIR__ . '/../../config.php');
global $PAGE, $OUTPUT;

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/theme/ktt_boost_child_cmrn/pages/contact.php'));
$PAGE->set_title(get_string('contact_title', 'theme_ktt_boost_child_cmrn'));
$PAGE->set_heading(get_string('contact_heading', 'theme_ktt_boost_child_cmrn'));

echo $OUTPUT->header();
//echo $OUTPUT->render_from_template('theme_ktt_boost_child_cmrn/pages/contact', []);
echo $OUTPUT->footer();