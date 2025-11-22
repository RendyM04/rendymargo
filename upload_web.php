body {
  font-family: 'Segoe UI', Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: #f4f4f4;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px;
  background: #fff;
  box-shadow: 0 2px 8px #eee;
}

.navbar .logo-text {
  font-size: 2rem;
  font-weight: 700;
}

.navbar ul {
  list-style: none;
  display: flex;
  gap: 2rem;
  margin: 0;
}

.navbar a {
  text-decoration: none;
  color: #333;
  font-size: 1.2rem;
}

.hero-section {
  min-height: 370px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: linear-gradient(120deg, #59c173, #a17fe0 50%, #5dbeec);
  color: #fff;
  text-align: center;
}

.profile-pic {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  background: #fff;
  margin-bottom: 24px;
  border: 6px solid #fff;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s;
}

.profile-pic:hover {
  transform: scale(1.04);
}

.edit-profile-pic {
  margin-bottom: 16px;
}