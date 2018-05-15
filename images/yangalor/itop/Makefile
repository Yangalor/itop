REPOSITORY != cat ./repository
VERSION != cat ./version
all: ver
	docker tag $(REPOSITORY):$(VERSION) $(REPOSITORY):latest

ver: Dockerfile
	docker build -t $(REPOSITORY):$(VERSION) .