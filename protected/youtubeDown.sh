#!/bin/bash 
# A very simple Bash script to download a YouTube video 
# and extract the music file from it. 
address=$1 
regex='v=(.*)' 
if [[ $address =~ $regex ]]; then 
    # echo "Obtendo informações do video"
    video_id=${BASH_REMATCH[1]}
    video_id=$(echo $video_id | cut -d'&' -f1)
    video_title="$(youtube-dl --get-title $address)"
    tmpFolder="../tmp"
    musicFolder="../musics"
    finalFile="$musicFolder/$video_title.mp3"
    # echo "Baixando $video_title"
    youtube-dl -o "$tmpFolder/%(id)s.%(ext)s" --extract-audio --audio-format m4a $address --youtube-skip-dash-manifest --no-check-certificate

    # echo "Convertendo para Mp3"
    # ffmpeg -i "$video_id.m4a" "$video_title.mp3"

if [ ! -f "$finalFile" ]; then
	avconv -i "$tmpFolder/$video_id.m4a" "$musicFolder/$video_title.mp3"
	rm "$tmpFolder/$video_id.m4a"
	echo "$video_title.mp3"
fi
    # echo "Removendo audio"
    echo "$video_title.mp3"

else
    echo "Desculpe, mas houve algum problema."
fi
