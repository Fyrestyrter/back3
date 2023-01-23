<?php

function getEvents($connect)
{
	$events = mysqli_query($connect, "SELECT * FROM menu");
	$EventList = [];
	while($event = mysqli_fetch_assoc($events)){
		$EventList[] = $event;
	}
	echo json_encode($EventList);
}

function getEvent($connect, $id)
{
	$event = mysqli_query($connect,"SELECT * FROM menu WHERE id_list = '$id'");
	if(mysqli_num_rows($event) === 0){
		http_response_code(404);
		$res = [
			"status" => false,
			"message" => "event not found"
		];
		echo json_encode($res);
	} else {
		$event = mysqli_fetch_assoc($event);
		echo json_encode($event);
	}
}
function addEvent($connect, $data){
	$event = $data['name'];
	$date =  $data['datey'];
	mysqli_query($connect, "INSERT INTO menu (name_event, datey) VALUES ('$event','$date')");
	
	http_response_code(201);

	$res = [
		"status" => true,
		"id_list" => mysqli_insert_id($connect)
	];
	echo json_encode($res);
}

function updateEvent($connect, $data){
	$id = $data['id'];
	$event = $data['name'];
	$date =  $data['datey'];
	mysqli_query($connect, "UPDATE menu SET name_event = '$event', datey = '$date' WHERE menu.id_list = $id");
	
	http_response_code(200);
	$res = [
		"status" => true,
		"message" => "event is edited",
		"name_event" => $event,
		"datey" => $date
	];
	echo json_encode($res);
}

function deleteEvent($connect, $id){
	mysqli_query($connect, "DELETE FROM menu WHERE menu.id_list = $id");

	http_response_code(200);
	$res = [
		"status" => true,
		"id_list" => $id,
		"message" => "event is deleted",
	];
	echo json_encode($res);
}