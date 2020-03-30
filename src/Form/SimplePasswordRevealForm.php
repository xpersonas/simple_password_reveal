<?php

namespace Drupal\simple_password_reveal\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form for setting whether passwords are revealed or hidden by default.
 */
class SimplePasswordRevealForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'simple_password_reveal.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'simple_password_reveal_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('simple_password_reveal.settings');

    $form['concealed_default'] = [
      '#type' => 'checkbox',
      '#title' => $this->t("Hide all user passwords from plain text view by default"),
      '#description' => $this->t("All users can always hide or reveal their passwords using the checkbox on each password form. This setting simply controls which way it is initially set when those forms are loaded."),
      '#default_value' => $config->get('concealed_default'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('simple_password_reveal.settings')
      ->set('concealed_default', $form_state->getValue('concealed_default'))
      ->save();
  }

}
