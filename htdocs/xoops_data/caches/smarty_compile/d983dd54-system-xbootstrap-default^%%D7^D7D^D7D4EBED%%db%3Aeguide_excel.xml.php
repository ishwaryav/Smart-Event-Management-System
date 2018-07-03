<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_excel.xml */ ?>
<?php echo '<?xml'; ?>
 version="1.0"<?php echo '?>'; ?>

<?php echo '<?mso'; ?>
-application progid="Excel.Sheet"<?php echo '?>'; ?>

<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:o="urn:schemas-microsoft-com:office:office"
 xmlns:x="urn:schemas-microsoft-com:office:excel"
 xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:html="http://www.w3.org/TR/REC-html40">
 <DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
  <Author>Event Guide 2.0</Author>
  <LastAuthor><?php echo $this->_tpl_vars['uname']; ?>
</LastAuthor>
  <Revision>1</Revision>
  <TotalTime>0</TotalTime>
  <Created><?php echo $this->_tpl_vars['created']; ?>
</Created>
  <Version>1.0</Version>
 </DocumentProperties>
 <ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel">
  <WindowHeight>8190</WindowHeight>
  <WindowWidth>16380</WindowWidth>
  <WindowTopX>0</WindowTopX>
  <WindowTopY>0</WindowTopY>
  <TabRatio>330</TabRatio>
  <ProtectStructure>False</ProtectStructure>
  <ProtectWindows>False</ProtectWindows>
 </ExcelWorkbook>
 <Styles>
  <Style ss:ID="Default" ss:Name="Normal">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font x:CharSet="128" x:Family="Modern" ss:Size="11"/>
   <Interior/>
   <NumberFormat/>
   <Protection/>
  </Style>
  <Style ss:ID="s21">
   <NumberFormat ss:Format="yyyy-m-d\ h:mm;@"/>
  </Style>
  <Style ss:ID="s22">
   <Borders/>
   <Font x:CharSet="128" x:Family="Modern" ss:Size="11"
    ss:Bold="1"/>
  </Style>
  <Style ss:ID="s24">
   <Interior/>
  </Style>
  <Style ss:ID="s25">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
   </Borders>
   <Font x:CharSet="128" x:Family="Modern" ss:Size="11"/>
   <NumberFormat ss:Format="yyyy-m-d\ h:mm;@"/>
  </Style>
  <Style ss:ID="s26">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
   </Borders>
   <Font x:CharSet="128" x:Family="Modern" ss:Size="11"/>
  </Style>
  <Style ss:ID="s27">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
   </Borders>
   <Font x:CharSet="128" x:Family="Modern" ss:Size="11"/>
  </Style>
  <Style ss:ID="s29">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
   </Borders>
  </Style>
  <Style ss:ID="s30">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
   </Borders>
  </Style>
  <Style ss:ID="s31">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
   </Borders>
  </Style>
  <Style ss:ID="s32">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
   </Borders>
  </Style>
  <Style ss:ID="s33">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
   </Borders>
  </Style>
  <Style ss:ID="s34">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
   </Borders>
  </Style>
  <Style ss:ID="s35">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
   </Borders>
   <Interior/>
  </Style>
  <Style ss:ID="s36">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"
     ss:Color="#000000"/>
   </Borders>
   <Font x:CharSet="128" x:Family="Modern" ss:Size="11"/>
   <NumberFormat ss:Format="yyyy-m-d\ h:mm;@"/>
  </Style>
  <Style ss:ID="s37">
   <Alignment ss:Horizontal="Left"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"
     ss:Color="#000000"/>
   </Borders>
   <NumberFormat ss:Format="yyyy&quot;-&quot;mm&quot;-&quot;dd&quot; &quot;\(aaa\);@"/>
  </Style>
 </Styles>
<?php $_from = $this->_tpl_vars['sheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sname'] => $this->_tpl_vars['sheet']):
?>
 <Worksheet ss:Name="<?php echo $this->_tpl_vars['sname']; ?>
">
  <Table ss:ExpandedColumnCount="<?php echo $this->_tpl_vars['max_cols']+6; ?>
" ss:ExpandedRowCount="<?php echo $this->_tpl_vars['max_rows']+5; ?>
" x:FullColumns="1"
   x:FullRows="1" ss:DefaultColumnWidth="54" ss:DefaultRowHeight="13.5">
   <Column ss:StyleID="s21" ss:AutoFitWidth="0" ss:Width="64.5"/>
   <Column ss:AutoFitWidth="0" ss:Width="120.75"/>
   <Column ss:AutoFitWidth="0" ss:Width="90"/>
   <Column ss:AutoFitWidth="0" ss:Width="41.25"/>
   <Column ss:AutoFitWidth="0" ss:Width="63.75"/>
   <Column ss:AutoFitWidth="0" ss:Width="142.5"/>
   <Column ss:AutoFitWidth="0" ss:Width="87"/>
   <Column ss:AutoFitWidth="0" ss:Width="56.25"/>
   <Column ss:AutoFitWidth="0" ss:Width="104.25"/>
   <Column ss:AutoFitWidth="0" ss:Width="90"/>
   <Row ss:AutoFitHeight="0" ss:Height="23.25">
    <Cell ss:StyleID="s22"><Data ss:Type="String"><?php echo @_MD_TITLE; ?>
</Data></Cell>
    <Cell ss:MergeAcross="3" ss:StyleID="s35"><Data ss:Type="String"><?php echo $this->_tpl_vars['sheet']['title']; ?>
</Data></Cell>
   </Row>
   <Row>
    <Cell ss:Index="2" ss:StyleID="s24"/>
    <Cell ss:StyleID="s24"/>
    <Cell ss:StyleID="s24"/>
    <Cell ss:StyleID="s24"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="23.25">
    <Cell ss:StyleID="s22"><Data ss:Type="String"><?php echo @_MD_EXTENT_DATE; ?>
</Data></Cell>
    <Cell ss:MergeAcross="3" ss:StyleID="s37"><Data ss:Type="DateTime"><?php echo $this->_tpl_vars['sheet']['edate']; ?>
T00:00:00.000</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21.75"/>
   <Row ss:AutoFitHeight="0" ss:Height="24">
    <Cell ss:StyleID="s25"><Data ss:Type="String"><?php echo @_MD_STARTTIME; ?>
</Data></Cell>
<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label']):
        $this->_foreach['items']['iteration']++;
?>
  <?php if ($this->_foreach['items']['iteration'] < $this->_tpl_vars['max_cols']): ?>
    <Cell ss:StyleID="s26"><Data ss:Type="String"><?php echo $this->_tpl_vars['label']; ?>
</Data></Cell>
  <?php elseif ($this->_foreach['items']['iteration'] == $this->_tpl_vars['max_cols']): ?>
    <Cell ss:StyleID="s27"><Data ss:Type="String"><?php echo $this->_tpl_vars['label']; ?>
</Data></Cell>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
   </Row>
<?php $_from = $this->_tpl_vars['sheet']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rows'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rows']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['stime'] => $this->_tpl_vars['rows']):
        $this->_foreach['rows']['iteration']++;
?>
 <?php if ($this->_foreach['rows']['iteration'] <= $this->_tpl_vars['max_sect']): ?>
  <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['line'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['line']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nrec'] => $this->_tpl_vars['row']):
        $this->_foreach['line']['iteration']++;
?>
   <?php if (($this->_foreach['line']['iteration'] <= 1)): ?>
   <Row ss:AutoFitHeight="0" ss:Height="25.5">
    <Cell ss:MergeDown="<?php echo $this->_tpl_vars['max_rows']-1; ?>
" ss:StyleID="s36"><Data ss:Type="String"><?php echo $this->_tpl_vars['stime']; ?>
</Data></Cell>
    <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colum']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nn'] => $this->_tpl_vars['col']):
        $this->_foreach['colum']['iteration']++;
?>
      <?php if ($this->_foreach['colum']['iteration'] < $this->_tpl_vars['max_cols']): ?>
	<Cell ss:StyleID="s29"><Data <?php if (($this->_foreach['colum']['iteration'] <= 1) && ! ($this->_foreach['colum']['iteration'] <= 1)): ?>ss:Index="2" <?php endif; ?>ss:Type="<?php echo $this->_tpl_vars['col']['type']; ?>
"><?php echo $this->_tpl_vars['col']['value']; ?>
</Data></Cell>
      <?php elseif ($this->_foreach['colum']['iteration'] == $this->_tpl_vars['max_cols']): ?>
	<Cell ss:StyleID="s30"><Data ss:Type="<?php echo $this->_tpl_vars['col']['type']; ?>
"><?php echo $this->_tpl_vars['col']['value']; ?>
</Data></Cell>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
   </Row>
   <?php elseif ($this->_foreach['line']['iteration'] < $this->_tpl_vars['max_rows']): ?>
   <Row ss:AutoFitHeight="0" ss:Height="25.5">
    <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colum']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nn'] => $this->_tpl_vars['col']):
        $this->_foreach['colum']['iteration']++;
?>
      <?php if ($this->_foreach['colum']['iteration'] < $this->_tpl_vars['max_cols']): ?>
	<Cell <?php if (($this->_foreach['colum']['iteration'] <= 1)): ?>ss:Index="2" <?php endif; ?>ss:StyleID="s31"><Data ss:Type="<?php echo $this->_tpl_vars['col']['type']; ?>
"><?php echo $this->_tpl_vars['col']['value']; ?>
</Data></Cell>
      <?php elseif ($this->_foreach['colum']['iteration'] == $this->_tpl_vars['max_cols']): ?>
	<Cell ss:StyleID="s32"><Data ss:Type="<?php echo $this->_tpl_vars['col']['type']; ?>
"><?php echo $this->_tpl_vars['col']['value']; ?>
</Data></Cell>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
   </Row>
   <?php elseif ($this->_foreach['line']['iteration'] == $this->_tpl_vars['max_rows']): ?>
   <Row ss:AutoFitHeight="0" ss:Height="25.5">
    <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colum']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nn'] => $this->_tpl_vars['col']):
        $this->_foreach['colum']['iteration']++;
?>
      <?php if ($this->_foreach['colum']['iteration'] < $this->_tpl_vars['max_cols']): ?>
	<Cell <?php if (($this->_foreach['colum']['iteration'] <= 1)): ?>ss:Index="2" <?php endif; ?>ss:StyleID="s33"><Data ss:Type="<?php echo $this->_tpl_vars['col']['type']; ?>
"><?php echo $this->_tpl_vars['col']['value']; ?>
</Data></Cell>
      <?php elseif ($this->_foreach['colum']['iteration'] == $this->_tpl_vars['max_cols']): ?>
	<Cell ss:StyleID="s34"><Data ss:Type="<?php echo $this->_tpl_vars['col']['type']; ?>
"><?php echo $this->_tpl_vars['col']['value']; ?>
</Data></Cell>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
   </Row>
   <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
 <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
  </Table>
  <WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
   <PageSetup>
    <Header x:Margin="0.51180555555555551"/>
    <Footer x:Margin="0.51180555555555551"/>
    <PageMargins x:Bottom="0.40972222222222221" x:Left="0.37013888888888891"
     x:Right="0.39027777777777778" x:Top="0.8"/>
   </PageSetup>
   <FitToPage/>
   <Print>
    <ValidPrinterInfo/>
    <PaperSizeIndex>9</PaperSizeIndex>
    <HorizontalResolution>300</HorizontalResolution>
    <VerticalResolution>300</VerticalResolution>
   </Print>
   <Zoom>80</Zoom>
   <Panes>
    <Pane>
     <Number>3</Number>
     <ActiveCol>9</ActiveCol>
    </Pane>
   </Panes>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet>
<?php endforeach; endif; unset($_from); ?>
</Workbook>