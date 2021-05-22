import web

urls = (
    '/', 'mvc.controller.index.Index',
    '/ubuntu', 'mvc.controller.ubuntu.Ubuntu',
    '/docker', 'mvc.controller.docker.Docker',
  
)
app = web.application(urls, globals())


if __name__ == "__main__":
    app.run()