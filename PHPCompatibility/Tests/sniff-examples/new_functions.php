<?php

// These calls should *not* trigger an error.
ExampleClass::random_bytes(); // Method, not the native PHP function.
$myobject->random_bytes(); // Method, not the native PHP function.
myNamespace\random_bytes(); // Namespaced function, not the native PHP function.
myNamespace\ExampleClass::random_bytes(); // Namespaced method, not the native PHP function.

/*
 * All the below functions should trigger an error.
 */
array_fill_keys();
\array_fill_keys(); // Global namespace
error_get_last();
image_type_to_extension();
memory_get_peak_usage();
sys_get_temp_dir();
timezone_abbreviations_list();
timezone_identifiers_list();
timezone_name_from_abbr();
stream_socket_shutdown();
imagegrabscreen();
imagegrabwindow();
libxml_disable_entity_loader();
mb_stripos();
mb_stristr();
mb_strrchr();
mb_strrichr();
mb_strripos();
ming_setSWFCompression();
openssl_csr_get_public_key();
openssl_csr_get_subject();
openssl_pkey_get_details();
spl_object_hash();
iterator_apply();
preg_last_error();
pg_field_table();
posix_initgroups();
gmp_nextprime();
xmlwriter_full_end_element();
xmlwriter_write_raw();
xmlwriter_start_dtd_entity();
xmlwriter_end_dtd_entity();
xmlwriter_write_dtd_entity();
filter_has_var();
filter_id();
filter_input_array();
filter_input();
filter_list();
filter_var_array();
filter_var();
json_decode();
json_encode();
zip_close();
zip_entry_close();
zip_entry_compressedsize();
zip_entry_compressionmethod();
zip_entry_filesize();
zip_entry_name();
zip_entry_open();
zip_entry_read();
zip_open();
zip_read();

array_replace();
array_replace_recursive();
class_alias();
forward_static_call();
forward_static_call_array();
gc_collect_cycles();
gc_disable();
gc_enable();
gc_enabled();
get_called_class();
gethostname();
header_remove();
lcfirst();
parse_ini_string();
quoted_printable_encode();
str_getcsv();
stream_context_set_default();
stream_supports_lock();
stream_context_get_params();
date_add();
date_create_from_format();
date_diff();
date_get_last_errors();
date_parse_from_format();
date_sub();
timezone_version_get();
gmp_testbit();
hash_copy();
imap_gc();
imap_utf8_to_mutf7();
imap_mutf7_to_utf8();
json_last_error();
mysqli_fetch_all();
mysqli_get_connection_status();
mysqli_poll();
mysqli_read_async_query();
openssl_random_pseudo_bytes();
pcntl_signal_dispatch();
pcntl_sigprocmask();
pcntl_sigtimedwait();
pcntl_sigwaitinfo();
preg_filter();
msg_queue_exists();
shm_has_vars();
acosh();
asinh();
atanh();
expm1();
log1p();
enchant_broker_describe();
enchant_broker_dict_exists();
enchant_broker_free_dict();
enchant_broker_free();
enchant_broker_get_error();
enchant_broker_init();
enchant_broker_list_dicts();
enchant_broker_request_dict();
enchant_broker_request_pwl_dict();
enchant_broker_set_ordering();
enchant_dict_add_to_personal();
enchant_dict_add_to_session();
enchant_dict_check();
enchant_dict_describe();
enchant_dict_get_error();
enchant_dict_is_in_session();
enchant_dict_quick_check();
enchant_dict_store_replacement();
enchant_dict_suggest();
finfo_buffer();
finfo_close();
finfo_file();
finfo_open();
finfo_set_flags();
intl_error_name();
intl_get_error_code();
intl_get_error_message();
intl_is_failure();
mysqli_get_cache_stats();

hex2bin();
http_response_code();
get_declared_traits();
getimagesizefromstring();
stream_set_chunk_size();
socket_import_stream();
trait_exists();
header_register_callback();
class_uses();
session_status();
session_register_shutdown();
mysqli_error_list();
mysqli_stmt_error_list();
libxml_set_external_entity_loader();
ldap_control_paged_result();
ldap_control_paged_result_response();
transliteral_create();
transliteral_create_from_rules();
transliteral_create_inverse();
transliteral_get_error_code();
transliteral_get_error_message();
transliteral_list_ids();
transliteral_transliterate();
zlib_decode();
zlib_encode();

array_column();
boolval();
json_last_error_msg();
password_get_info();
password_hash();
password_needs_rehash();
password_verify();
hash_pbkdf2();
openssl_pbkdf2();
curl_escape();
curl_file_create();
curl_multi_setopt();
curl_multi_strerror();
curl_pause();
curl_reset();
curl_share_close();
curl_share_init();
curl_share_setopt();
curl_strerror();
curl_unescape();
imageaffinematrixconcat();
imageaffinematrixget();
imagecrop();
imagecropauto();
imageflip();
imagepalettetotruecolor();
imagescale();
mysqli_begin_transaction();
mysqli_release_savepoint();
mysqli_savepoint();
pg_escape_literal();
pg_escape_identifier();
socket_sendmsg();
socket_recvmsg();
socket_cmsg_space();
cli_get_process_title();
cli_set_process_title();
datefmt_format_object();
datefmt_get_calendar_object();
datefmt_get_timezone();
datefmt_set_timezone();
datefmt_get_calendar_object();
intlcal_create_instance();
intlcal_get_keyword_values_for_locale();
intlcal_get_now();
intlcal_get_available_locales();
intlcal_get();
intlcal_get_time();
intlcal_set_time();
intlcal_add();
intlcal_set_time_zone();
intlcal_after();
intlcal_before();
intlcal_set();
intlcal_roll();
intlcal_clear();
intlcal_field_difference();
intlcal_get_actual_maximum();
intlcal_get_actual_minumum();
intlcal_get_day_of_week_type();
intlcal_get_first_day_of_week();
intlcal_get_greatest_minimum();
intlcal_get_least_maximum();
intlcal_get_locale();
intlcal_get_maximum();
intlcal_get_minimal_days_in_first_week();
intlcal_get_minimum();
intlcal_get_time_zone();
intlcal_get_type();
intlcal_get_weekend_transition();
intlcal_in_daylight_time();
intlcal_is_equivalent_to();
intlcal_is_lenient();
intlcal_equals();
intlcal_get_repeated_wall_time_option();
intlcal_get_skipped_wall_time_option();
intlcal_set_repeated_wall_time_option();
intlcal_set_skipped_wall_time_option();
intlcal_from_date_time();
intlcal_to_date_time();
intlcal_get_error_code();
intlcal_get_error_message();
intlgregcal_create_instance();
intlgregcal_set_gregorian_change();
intlgregcal_get_gregorian_change();
intlgregcal_is_leap_year();
intlz_create_time_zone();
intlz_create_default();
intlz_get_id();
intlz_get_gmt();
intlz_get_unknown();
intlz_create_enumeration();
intlz_count_equivalent_ids();
intlz_create_time_zone_id_enumeration();
intlz_get_canonical_id();
intlz_get_region();
intlz_get_tz_data_version();
intlz_get_equivalent_id();
intlz_use_daylight_time();
intlz_get_offset();
intlz_get_raw_offset();
intlz_has_same_rules();
intlz_get_display_name();
intlz_get_dst_savings();
intlz_from_date_time_zone();
intlz_to_date_time_zone();
intlz_get_error_code();
intlz_get_error_message();

gmp_root();
gmp_rootrem();
hash_equals();
ldap_escape();
ldap_modify_batch();
mysqli_get_links_stats();
openssl_get_cert_locations();
openssl_x509_fingerprint();
openssl_spki_new();
openssl_spki_verify();
openssl_spki_export_challenge();
openssl_spki_export();
pg_connect_poll();
pg_consume_input();
pg_flush();
pg_socket();
session_abort();
session_reset();

random_bytes();
random_int();
error_clear_last();
gmp_random_seed();
intdiv();
preg_replace_callback_array();
gc_mem_caches();
get_resources();
posix_setrlimit();
inflate_add();
deflate_add();
inflate_init();
deflate_init();

socket_export_stream();

curl_multi_errno();
curl_share_errno();
curl_share_strerror();
is_iterable();
pcntl_async_signals();
session_create_id();
session_gc();

oci_register_taf_callback();
oci_unregister_taf_callback();

ldap_exop();
ldap_exop_passwd();
ldap_exop_whoami();
ldap_parse_exop();
socket_addrinfo_lookup();
socket_addrinfo_connect();
socket_addrinfo_bind();
socket_addrinfo_explain();
stream_isatty();
sapi_windows_vt100_support();
ftp_append();
imagebmp();
imagecreatefrombmp();
imagegetclip();
imageopenpolygon();
imageresolution();
imagesetclip();
hash_hmac_algos();
mb_chr();
mb_ord();
mb_scrub();
sodium_add();
sodium_bin2hex();
sodium_compare();
sodium_crypto_aead_aes256gcm_decrypt();
sodium_crypto_aead_aes256gcm_encrypt();
sodium_crypto_aead_aes256gcm_is_available();
sodium_crypto_aead_aes256gcm_keygen();
sodium_crypto_aead_chacha20poly1305_decrypt();
sodium_crypto_aead_chacha20poly1305_encrypt();
sodium_crypto_aead_chacha20poly1305_ietf_decrypt();
sodium_crypto_aead_chacha20poly1305_ietf_encrypt();
sodium_crypto_aead_chacha20poly1305_ietf_keygen();
sodium_crypto_aead_chacha20poly1305_keygen();
sodium_crypto_auth_keygen();
sodium_crypto_auth_verify();
sodium_crypto_auth();
sodium_crypto_box_keypair_from_secretkey_and_publickey();
sodium_crypto_box_keypair();
sodium_crypto_box_open();
sodium_crypto_box_publickey_from_secretkey();
sodium_crypto_box_publickey();
sodium_crypto_box_seal_open();
sodium_crypto_box_seal();
sodium_crypto_box_secretkey();
sodium_crypto_box_seed_keypair();
sodium_crypto_box();
sodium_crypto_generichash_final();
sodium_crypto_generichash_init();
sodium_crypto_generichash_keygen();
sodium_crypto_generichash_update();
sodium_crypto_generichash();
sodium_crypto_kdf_derive_from_key();
sodium_crypto_kdf_keygen();
sodium_crypto_kx_client_session_keys();
sodium_crypto_kx_keypair();
sodium_crypto_kx_publickey();
sodium_crypto_kx_secretkey();
sodium_crypto_kx_seed_keypair();
sodium_crypto_kx_server_session_keys();
sodium_crypto_pwhash_scryptsalsa208sha256_str_verify();
sodium_crypto_pwhash_scryptsalsa208sha256_str();
sodium_crypto_pwhash_scryptsalsa208sha256();
sodium_crypto_pwhash_str_verify();
sodium_crypto_pwhash_str();
sodium_crypto_pwhash();
sodium_crypto_scalarmult_base();
sodium_crypto_scalarmult();
sodium_crypto_secretbox_keygen();
sodium_crypto_secretbox_open();
sodium_crypto_secretbox();
sodium_crypto_shorthash_keygen();
sodium_crypto_shorthash();
sodium_crypto_sign_detached();
sodium_crypto_sign_ed25519_pk_to_curve25519();
sodium_crypto_sign_ed25519_sk_to_curve25519();
sodium_crypto_sign_keypair_from_secretkey_and_publickey();
sodium_crypto_sign_keypair();
sodium_crypto_sign_open();
sodium_crypto_sign_publickey_from_secretkey();
sodium_crypto_sign_publickey();
sodium_crypto_sign_secretkey();
sodium_crypto_sign_seed_keypair();
sodium_crypto_sign_verify_detached();
sodium_crypto_sign();
sodium_crypto_stream_keygen();
sodium_crypto_stream_xor();
sodium_crypto_stream();
sodium_hex2bin();
sodium_increment();
sodium_memcmp();
sodium_memzero();
sodium_pad();
sodium_unpad();
spl_object_id();
