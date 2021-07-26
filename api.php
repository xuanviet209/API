<?php 
//xu dung CURL de call data tu api
function getDataImageFromApi($imageName= ''){
	// $url="https://pixabay.com/api/?key=22590028-3032f69dee4278e85d3f4e260&q={$imageName}&image_type=photo";
	$url="https://api.themoviedb.org/3/search/movie?query={$imageName}&api_key=cfe422613b250f702980a3bbf9e90716&page=1";
	// khoi tao curl
	$ch=curl_init();

	// set url- api (truy câp vao no)
	curl_setopt($ch, CURLOPT_URL, $url);

	//
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
	// cố gắng đổi tối đa 30s xu ly
	curl_setopt($ch,CURLOPT_TIMEOUT, 30);
	//thuc thi
	$output=curl_exec($ch);
	//ngắt kết nối
	curl_close($ch);
	//$output: nó sẽ là chuỗi json , can convert ve array cho de xu ly
	$images=[];
	if(!empty($output)){
		$images=json_decode($output,true);
	}
	return $images;
}
?>