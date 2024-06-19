<?php
$token="cTJzQllqQ2R2VVh5ZFNFUndmK3hZSEMwa0lTdTVmZDBqZ3NaY05JcUFFSHR6c2RLWmxxbysxZzliR255bUFzaGxra0FKa1d6OW5Hc0RPc0E1czVuNjhvNWh6K3BzNDdFdHdNV2JvNXdJdGdKT3hYV2tmaW1qR1lnZWszTklRZUhSRVFIMHN4WTErbUhwTTR0cGRaZXpNWHV2Sk41WWsyVUFhY2FZUjBnaTJVdFU5VXR5UWg3QXNVMVpDbWZMeldB";
$header= array("Authorization: Bearer ".$token );

$query=http_build_query(
array("page"=>'1')
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://bukaolshop.net/api/v1/produk/list?".$query);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$hasil = curl_exec($ch);
curl_close ($ch);
echo $hasil;
