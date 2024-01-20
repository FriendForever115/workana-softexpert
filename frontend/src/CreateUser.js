import React, { useState } from 'react';

function CreateUser() {
  const [userData, setUserData] = useState({
    name: '',
    email: '',
    password: '',
  });

  const handleChange = (e) => {
    setUserData({ ...userData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await fetch('http://localhost:8000/api/users', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(userData),
      });

      if (response.ok) {
        // Se a resposta for bem-sucedida, você pode realizar ações aqui (ex: redirecionamento, exibir mensagem de sucesso, etc.)
        console.log('User created successfully!');
      } else {
        // Se a resposta não for bem-sucedida, você pode lidar com o erro aqui
        console.error('Failed to create user');
      }
    } catch (error) {
      console.error('Error:', error);
    }
  };

  return (
    <div>
      <h2>Create User</h2>
      <form onSubmit={handleSubmit}>
        <label>
          Name:
          <input type="text" name="name" value={userData.name} onChange={handleChange} />
        </label>
        <br />
        <label>
          Email:
          <input type="email" name="email" value={userData.email} onChange={handleChange} />
        </label>
        <br />
        <label>
          Password:
          <input type="password" name="password" value={userData.password} onChange={handleChange} />
        </label>
        <br />
        <button type="submit">Create User</button>
      </form>
    </div>
  );
}

export default CreateUser;
