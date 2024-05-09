<style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 300px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f5f5f5;
    }

    /* Labels */
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    /* Input fields */
    input[type="email"],
    input[type="password"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
    }

    select {
      appearance: none;
      background-image: url("data:image/svg+xml;base64,phN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCbG9jayI9Ii0uNzUgLTAuNzUgMTIgMTIiIHhtbG9uZW5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodmciIHdpZHRoPSI2IiBoZWlmZWlnPSI2Ij48cGF0aCBkPSJNMSAydiNAMzLjU0NS40NTUgNS4wOTkgNC45MDkgMy41NDUgNy40NTUgMS4wOTkgMy41NDVMMCAydiYzEuNDY4LjQyMiAyLjkzNy0uMDkyIDQuMjA3LTEuMDkyIiBmaWxsPSIjYWFhYWFhIiBmaWxsLX rule="evenodd" /></svg>"); /* Replace with your arrow image */
      background-repeat: no-repeat;
      background-position: right 10px center;
    }

    input[type="email"]:focus,
    input[type="password"]:focus,
    select:focus {
      border-color: #3399ff;
      outline: none;
    }

    button[type="submit"] {
      background-color: #3399ff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
    }

    button[type="submit"]:hover {
      background-color: #2eafff;
    }


    .error-message {
      color: red;
      font-size: 14px;
      margin-top: 10px;
    }
    </style>

    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="form-container">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br>

        <label for="role">Role</label>
        <select name="role" id="role" required>
          <option value="">Select Role</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select><br>

        <button type="submit">Register</button>
      </div>

      <div class="error-message"></div>
    </form>
