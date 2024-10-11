<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9fafb;
            font-family: 'Arial', sans-serif;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
        }
        .header {
            background-color: #b0e5eb;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            color: white;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #374151;
        }
        p {
            font-size: 16px;
            color: #4b5563;
            margin-bottom: 10px;
        }

        .highlight {
            font-weight: bold;
            color: #1f2937;
        }

    </style>
</head>
<body style="background-color: #f3f4f6; padding: 40px;">
<div class="container">
    <!-- Header -->
    <div class="header">
        <h1>Contact Form Details</h1>
    </div>

    <!-- Content -->
    <div class="content">
        <p><span class="highlight">Name:</span> {{ $name }}</p>
        <p><span class="highlight">Email:</span> {{ $email }}</p>
        <p><span class="highlight">Mobile:</span> {{ $phone }}</p>
        <p><span class="highlight">Subject:</span> {{ $subject }}</p>

    </div>

</div>
</body>
</html>
