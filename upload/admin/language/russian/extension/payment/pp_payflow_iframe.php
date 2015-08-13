<?php
// *	@copyright	OCSHOP.CMS \ ocshop.net 2011 - 2015.
// *	@demo	http://ocshop.net
// *	@blog	http://ocshop.info
// *	@forum	http://forum.ocshop.info
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

// Heading
$_['heading_title']					= 'PayPal Payflow Pro iFrame';
$_['heading_refund']				= 'Refund';

// Text
$_['text_payment']					= 'Платеж';
$_['text_success']					= 'Success: You have modified PayPal Payflow Pro iFrame account details!';
$_['text_edit']                     = 'Редактирование';
$_['text_pp_payflow_iframe']		= '<a target="_BLANK" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			= 'Authorization';
$_['text_sale']						= 'Sale';
$_['text_authorise']				= 'Authorise';
$_['text_capture']					= 'Delayed Capture';
$_['text_void']						= 'Void';
$_['text_payment_info']				= 'Платёжные реквизиты';
$_['text_complete']					= 'Complete';
$_['text_incomplete']				= 'Incomplete';
$_['text_transaction']				= 'Transaction';
$_['text_confirm_void']				= 'If you void you cannot capture any further funds';
$_['text_refund']					= 'Refund';
$_['text_refund_issued']			= 'Refund was issued successfully';
$_['text_redirect']					= 'Redirect';
$_['text_iframe']					= 'Iframe';
$_['help_checkout_method']			= 'Please use Redirect method if do not have SSL installed or if you do not have Pay with PayPal option disabled on your hosted payment page.';

// Column
$_['column_transaction_id']			= 'Transaction ID';
$_['column_transaction_type']		= 'Transaction Type';
$_['column_amount']					= 'Итого';
$_['column_time']					= 'Время';
$_['column_actions']				= 'Actions';

// Tab
$_['tab_settings']					= 'Настройки';
$_['tab_order_status']				= 'Статус';
$_['tab_checkout_customisation']	= 'Checkout Customisation';

// Entry
$_['entry_vendor']					= 'Vendor';
$_['entry_user']					= 'User';
$_['entry_password']				= 'Пароль';
$_['entry_partner']					= 'Partner';
$_['entry_test']					= 'Test Mode';
$_['entry_transaction']				= 'Transaction Method';
$_['entry_total']					= 'Всего';
$_['entry_order_status']			= 'Статус';
$_['entry_geo_zone']				= 'Географическая зона';
$_['entry_status']					= 'Статус';
$_['entry_sort_order']				= 'Порядок сортировки';
$_['entry_transaction_id']			= 'Transaction ID';
$_['entry_full_refund']				= 'Full refund';
$_['entry_amount']					= 'Итого';
$_['entry_message']					= 'Сообщение';
$_['entry_ipn_url']					= 'IPN URL';
$_['entry_checkout_method']			= 'Checkout Method';
$_['entry_debug']					= 'Debug mode';
$_['entry_transaction_reference']	= 'Transaction Reference';
$_['entry_transaction_amount']		= 'Transaction Amount';
$_['entry_refund_amount']			= 'Refund Amount';
$_['entry_capture_status']			= 'Capture Status';
$_['entry_void']					= 'Void';
$_['entry_capture']					= 'Capture';
$_['entry_transactions']			= 'Операции';
$_['entry_complete_capture']		= 'Complete Capture';
$_['entry_canceled_reversal_status'] = 'Canceled Reversal Status:';
$_['entry_completed_status']		= 'Completed Status:';
$_['entry_denied_status']			= 'Denied Status:';
$_['entry_expired_status']			= 'Expired Status:';
$_['entry_failed_status']			= 'Failed Status:';
$_['entry_pending_status']			= 'Pending Status:';
$_['entry_processed_status']		= 'Processed Status:';
$_['entry_refunded_status']			= 'Refunded Status:';
$_['entry_reversed_status']			= 'Reversed Status:';
$_['entry_voided_status']			= 'Voided Status:';
$_['entry_cancel_url']				= 'Cancel URL:';
$_['entry_error_url']				= 'Error URL:';
$_['entry_return_url']				= 'Return URL:';
$_['entry_post_url']				= 'Silent POST URL:';

// Help
$_['help_vendor']					= 'Your merchant login ID that you created when you registered for the Website Payments Pro account';
$_['help_user']						= 'If you set up one or more additional users on the account, this value is the ID of the user authorised to process transactions. If, however, you have not set up additional users on the account, USER has the same value as VENDOR';
$_['help_password']					= 'The 6 to 32 character password that you defined while registering for the account';
$_['help_partner']					= 'The ID provided to you by the authorised PayPal Reseller who registered you for the Payflow SDK. If you purchased your account directly from PayPal, use the PayPal Pro instead';
$_['help_test']						= 'Use the live or testing (sandbox) gateway server to process transactions?';
$_['help_total']					= 'The checkout total the order must reach before this payment method becomes active';
$_['help_debug']					= 'Logs additional information';

// Button
$_['button_refund']					= 'Refund';
$_['button_void']					= 'Void';
$_['button_capture']				= 'Capture';

// Error
$_['error_permission']				= 'У вас недостаточно прав для внесения изменений!';
$_['error_vendor']					= 'Vendor Required!';
$_['error_user']					= 'User Required!';
$_['error_password']				= 'Password Required!';
$_['error_partner']					= 'Partner Required!';
$_['error_missing_data']			= 'Missing data';
$_['error_missing_order']			= 'Could not find the order';
$_['error_general']					= 'Возникла ошибка';
$_['error_capture_amt']				= 'Enter an amount to capture';