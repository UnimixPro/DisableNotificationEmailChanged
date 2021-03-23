<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Unimix\DisableNotificationEmailChanged\Plugin\Magento\Customer\Model;

class EmailNotification
{

    public function aroundCredentialsChanged(
        \Magento\Customer\Model\EmailNotification $subject,
        \Closure $proceed,
        $savedCustomer,
        $origCustomerEmail,
        $isPasswordChanged = false
    ) {
        if($isPasswordChanged) {
            //Your plugin code
            $result = $proceed($savedCustomer, $origCustomerEmail, $isPasswordChanged);
        }
    }
}

