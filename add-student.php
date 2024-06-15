<div class="wp9-sms">
    <div class="container wp9-add-student">
        <div class="card">
            <h2>Add New Student</h2>
            <div class="alert alert-success">Student added successfully!</div>
            <div class="alert alert-error">There was an error adding the student.</div>
            <form id="add-student-form">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <input type="file" name="profile_photo" accept="image/*" required>
                <button type="submit">Add Student</button>
            </form>
        </div>
    </div>
</div>