import web

urls = (
    '/', 'mvc.controller.index.Index',
    '/ubuntu', 'mvc.controller.ubuntu.Ubuntu',
  
)
app = web.application(urls, globals())


if __name__ == "__main__":
    app.run()