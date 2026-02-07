<?php
include '../config/db.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $data = json_decode(file_get_contents("php://input"), true);

//     $sql = "INSERT INTO tasks (title, description, priority, status)
//             VALUES (
//                 '{$data['title']}',
//                 '{$data['description']}',
//                 '{$data['priority']}',
//                 '{$data['status']}'
//             )";

//     if ($conn->query($sql)) {
//         echo json_encode(["success" => true]);
//     } else {
//         echo json_encode(["success" => false]);
//     }
// }

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {

    // CREATE Task
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);

        $sql = "INSERT INTO tasks (title, description, priority, status)
                VALUES (
                    '{$data['title']}',
                    '{$data['description']}',
                    '{$data['priority']}',
                    '{$data['status']}'
                )";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Task created successfully", "success" => true]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to create task", "success" => false]);
        }
        break;

    // UPDATE Task
    case 'PUT':
        $data = json_decode(file_get_contents("php://input"), true);

        $id = $data['id'];

        $sql = "UPDATE tasks SET 
                title = '{$data['title']}',
                description = '{$data['description']}',
                priority = '{$data['priority']}',
                status = '{$data['status']}'
                WHERE id = $id";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Task updated successfully", "success" => true]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to update task", "success" => false]);
        }
        break;

    // DELETE Task
    case 'DELETE':
        parse_str(file_get_contents("php://input"), $data);
        $id = $data['id'];

        $sql = "DELETE FROM tasks WHERE id = $id";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Task deleted successfully", "success" => true]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to delete task", "success" => false]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method not allowed"]);

}
