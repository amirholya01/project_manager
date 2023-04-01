/**
 * This file exports all routes used in the application.
 * The module imports routes from the 'auth', 'project', 'team', and 'user' modules
 * and maps them to specific routes using the Express Router middleware. 
*/

// Express Router middleware
const router = require("express").Router();

// Import routes for authentication, project, team, user
const { authRoutes } = require("./auth");

const { projectRoutes } = require("./project")

const { teamRoutes } = require("./team");

const { userRoutes } = require("./user");

// Routes for authentication, project, team, user
router.use("/auth", authRoutes)

router.use("/project", projectRoutes)

router.use("/team", teamRoutes)

router.use("/user", userRoutes)


module.exports = {
    AllRoutes : router
}