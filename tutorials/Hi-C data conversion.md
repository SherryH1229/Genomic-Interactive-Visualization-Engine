# Hi-C data to bed format conversion

To be compatibable with different Hi-C contact matrices data types, users can follow these procedures to convert certain Hi-C data format to bed format that required by GIVE.

1) hic format from juicer (e.g. hic2bed strawDir hicFile outputFile binSize):
  * Download [straw](https://github.com/theaidenlab/straw/wiki/Download) and make sure it is excutable.
  * Download [hic2give](sysbio.ucsd.edu/public/qiw034/hic2give) and make sure it is excutable.
  * Run hic2give. Four parameters are required for the command (please input the parameter with the following order):
    * straw file directory,
    * hic file (file extension must be .hic),
    * output file name (with directory if user wish to save the file desired path),
    * bin size that user wants to extract the data from (please make sure the bin size you entered is contained in the hic file).

2) Contact matrices derived from [GITAR](http://www.genomegitar.org)
  * Download [gitar2give](sysbio.ucsd.edu/public/qiw034/gitar2give) and make sure it is excutable.
  * Run gitar2give. Two parameters are required for the command (please input the parameter with the following order):
    * directory to HiCtool generated normalized_enrich files,
    * output file name prefix.
    
3) Contact matrices in bed format
  * Since a lot of contact matrix data are in a format similar to bed format (e.g. [capture Hi-C data set](http://www.ebi.ac.uk/arrayexpress/files/E-MTAB-2323/E-MTAB-2323.additional.1.zip)), we provide a general code to convert this kind of format to GIVE required bed format as follows (use TS5_CD34_promoter-promoter_significant_interactions.txt from [capture Hi-C data set](http://www.ebi.ac.uk/arrayexpress/files/E-MTAB-2323/E-MTAB-2323.additional.1.zip) as the input file): 
    ```
    awk 'BEGIN{FS="\t";OFS="\t"}{
    print 2*(NR-1)+1,$1,$2,$3,NR,$11;
    print 2*(NR-1)+2,$7,$8,$9,NR,$11;
    }' inputfine > outputfile
    ```
