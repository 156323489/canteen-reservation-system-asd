<!-- feedback.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback | School Canteen Reservation System</title>
    <?php require_once 'header.php'; ?>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Feedback
                    </div>
                    <div class="card-body">
                        <form action="feedback_process.php" method="post">
                            <div class="form-group">
                                <label for="feedback">Your Feedback:</label>
                                <textarea class="form-control" id="feedback" name="feedback" rows="5" required></textarea>
                            </div>

                            <!-- Add the rating dropdown -->
                            <div class="form-group">
                                <label for="rating">Rating:</label>
                                <select class="form-control" id="rating" name="rating" required>
                                    <option value="5">5 - Excellent</option>
                                    <option value="4">4 - Very Good</option>
                                    <option value="3">3 - Good</option>
                                    <option value="2">2 - Fair</option>
                                    <option value="1">1 - Poor</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'footer.php'; ?>
</body>
</html>
