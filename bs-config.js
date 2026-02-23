module.exports = {
  files: ["./**/*.php"],
  port: 3000,
  ui: false,
  open: false,
  proxy: {
    target: "http://localhost:8081",
    ws: true
  },
  routes: {
    "/php74": "http://localhost:8082",
    "/php85": "http://localhost:8081"
  }
};