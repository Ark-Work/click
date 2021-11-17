
# DIR = scandir('.')
dir=$(ls);
i=0;
for f in "${dir[@]}"
do
	if [[ $f == data* ]];
		then
		echo $f;
	fi
done