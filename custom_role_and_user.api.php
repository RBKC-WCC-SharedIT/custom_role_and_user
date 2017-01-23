<?php

/**
 * @file
 * Defines hooks for module custom_role_and_user.
 *
 */

/**
 * Adds custom role with custom permissions, and adds custom user to role.
 *
 * @param string $user_name
 *    User name of custom user.
 *
 * @param string $role_name
 *    Name of custom role.
 *
 * @param string $password
 *    Password of user.
 *
 * @param string $email
 *    Email address of user.
 *
 * @param array $permissions
 *    Array of permissions to be applied.
 */
function hook_add_custom_role_and_user($role_name, $user_name, $password, $email, $permissions = array('all')) {
  //sample implementation
  $role = create_role($role_name, $permissions);
  assign_user_1_permissions_to_role($role);
  create_user($user_name, $password, $email);
  add_custom_role_to_user($user_name, $role_name);

}
