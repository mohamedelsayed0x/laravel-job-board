<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 30px;
        }

        .email-card {
            max-width: 600px;
            margin: auto;
            padding: 25px;
            background-color: white;
            border: 1px solid #dddddd;
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            color: #111827;
        }

        p {
            color: #4b5563;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 10px 18px;
            background-color: #1f2937;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="email-card">
        <h2>{{ $job->title }}</h2>

        <p>
            Your job is now live on our website.
        </p>

        <a class="button" href="{{ url('/jobs/' . $job->id) }}">
            View Your Job Listing
        </a>
    </div>

</body>

</html>
