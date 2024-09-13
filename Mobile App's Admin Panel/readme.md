# Admin Panel & RESTful API for Mobile App

## Overview

This repository contains the **Admin Panel** and **RESTful API** designed to manage and support a mobile application. While the mobile app itself is developed separately, this project provides the backend dashboard for administrators to manage app data and functionality, and a RESTful API that sends data to the mobile app via JSON.

The admin panel allows admins to manage users, content, and other application data, while the API facilitates communication between the backend and the mobile app by sending data in JSON format.

## Features

### Admin Panel
- **User Management**.
- **Content Management**.
- **Dashboard**.

### RESTful API
- **JSON Data Transfer**: Provides JSON responses for mobile app data requests.
- **Data Sync**: Ensures real-time data synchronization between the mobile app and the admin panel.

## Technologies Used

- **Frontend**: 
  - HTML5, CSS3, JavaScript.
  - Bootstrap for responsive UI components.
  
- **Backend**:
  - **PHP**
  - **API Development**: RESTful API with JSON responses.
  
- **Database**:
  - MySQL .


## Usage

1. **Admin Panel**: Log in as an admin to manage app users, content, and view analytics.
2. **RESTful API**: The mobile app will use the API endpoints to fetch and update data, ensuring the admin panel and app are in sync.

   
## Future Enhancements

- **Mobile App Integration**: Full sync between the admin panel and mobile app data.
- **API Rate Limiting**: Implement rate-limiting for API endpoints to prevent misuse.
- **Push Notifications**: Add a feature to trigger push notifications from the admin panel.
