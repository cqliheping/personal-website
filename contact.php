<?php
/**
 * 联系表单处理脚本
 * 接收前端提交的数据并保存到 messages.json 文件
 */

// 设置响应头
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// 只处理 POST 请求
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => '只允许 POST 请求']);
    exit;
}

// 获取表单数据
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// 验证必填字段
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => '请填写所有必填字段']);
    exit;
}

// 验证邮箱格式
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => '请输入有效的邮箱地址']);
    exit;
}

// 消息文件路径
$messagesFile = __DIR__ . '/messages.json';

// 准备消息数据
$newMessage = [
    'id' => uniqid(),
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message,
    'timestamp' => date('Y-m-d H:i:s'),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '',
];

// 读取现有消息
$messages = [];
if (file_exists($messagesFile)) {
    $jsonContent = file_get_contents($messagesFile);
    $messages = json_decode($jsonContent, true) ?? [];
}

// 添加新消息到数组开头
array_unshift($messages, $newMessage);

// 保存到文件
if (file_put_contents($messagesFile, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)) {
    echo json_encode([
        'success' => true,
        'message' => '消息已成功保存',
        'data' => $newMessage
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => '保存消息失败']);
}
?>
