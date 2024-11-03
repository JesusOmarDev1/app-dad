import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "./pages/home";
import AdminDashboard from "./pages/admin/admin-dashboard";

function App() {
  return (
    <main>
      <BrowserRouter>
        <Routes key={"app-dad-routes"}>
          {/* Default Routing */}
          <Route key={"app-dad-home"} path="/" element={<Home />} />
          {/* Authtentication Routing */}
          <Route
            key={"app-dad-signin"}
            path="/auth/signin"
            element={<h1>Sign In</h1>}
          />
          <Route
            key={"app-dad-signup"}
            path="/auth/signup"
            element={<h1>Sign Up</h1>}
          />
          <Route
            key={"app-dad-forgot-password"}
            path="/auth/forgot-password"
            element={<h1>Forgot Password</h1>}
          />
          {/* Authenticated Routing */}
          <Route
            key={"app-dad-admin-dashboard"}
            path="/admin/dashboard"
            element={<AdminDashboard />}
          />
          {/* 404 Routing */}
          <Route key={"app-dad-404"} path="*" element={<h1>404</h1>} />
          {/*  */}
        </Routes>
      </BrowserRouter>
    </main>
  );
}

export default App;
